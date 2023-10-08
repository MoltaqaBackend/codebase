<?php

namespace App\Repositories\Concretes;

use App\Traits\ActivityLogTrait;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Repositories\Contracts\BaseContract;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class BaseConcrete implements BaseContract
{
    use ActivityLogTrait;

    protected Model $model;
    protected string $modelName;
    protected Builder $query;

    protected array $defaultFilters = [];

    /**
     * BaseConcrete constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->query = $model->query();
        $this->model = $model;
        $this->modelName = class_basename($this->model);;
    }

    public function freshRepo(): static
    {
        $this->query = $this->model->query();
        return $this;
    }

    public function all()
    {
        return $this->query->get();
    }
    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function create(array $attributes = []): mixed
    {
        if (!empty($attributes)) {
            // Clean the attributes from unnecessary inputs
            $filtered = $this->cleanUpAttributes($attributes);
            $model = $this->query->create($filtered);
            $this->propertyLogActivity(
                $model,
                auth()->user(),
                "$this->modelName Created",
                ['action' => 'Creation', 'module' => $this->modelName]
            );
            return $model;
        }
        return false;
    }

    /**
     * @param Model $model
     * @param array $attributes
     *
     * @return mixed
     */
    public function update(Model $model, array $attributes = []): mixed
    {
         if (!empty($attributes)) {
            // Clean the attributes from unnecessary inputs
            $filtered = $this->cleanUpAttributes($attributes);
            $model = tap($model)->update($filtered)->fresh();
            $this->propertyLogActivity(
                $model,
                auth()->user(),
                "$this->modelName Updated",
                ['action' => 'Update', 'module' => $this->modelName]
            );
            return $model;
        }
        return false;
    }

    /**
     * @param Model $model
     * @param string $relation
     * @param array $attributes
     *
     * @return mixed
     */
    public function attach(Model $model, string $relation, array $attributes = []): mixed
    {
        if (!empty($attributes)) {
            return $model->{$relation}()->attach($attributes);
        }
        return false;
    }

    /**
     * @param Model $model
     * @param string $relation
     * @param array $attributes
     *
     * @return mixed
     */
    public function detach(Model $model, string $relation, array $attributes = []): mixed
    {
        if (!empty($attributes)) {
            return $model->{$relation}()->detach($attributes);
        }
        return false;
    }

    /**
     * @param Model $model
     * @param string $relation
     * @param array $attributes
     *
     * @return mixed
     */
    public function sync(Model $model, string $relation, array $attributes = []): mixed
    {
        if (!empty($attributes)) {
            return $model->{$relation}()->sync($attributes);
        }
        return false;
    }

    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function updateAll(array $attributes = []): mixed
    {
        if (!empty($attributes)) {
            // Clean the attributes from unnecessary inputs
            $filtered = $this->cleanUpAttributes($attributes);
            return $this->query->update($filtered);
        }
        return false;
    }

    /**
     * @param $key
     * @param $values
     * @param array $attributes
     *
     * @return int|bool
     */
    public function updateAllByKey($key, array $values = [], array $attributes = []): int|bool
    {
        if (!empty($attributes) && !empty($values)) {
            // Clean the attributes from unnecessary inputs
            $filtered = $this->cleanUpAttributes($attributes);
            return $this->query->whereIn($key, $values)->update($filtered);
        }
        return false;
    }

    /**
     * @param array $attributes
     * @param null $id
     *
     * @return bool|mixed
     */
    public function createOrUpdate(array $attributes = [], $id = null): mixed
    {
        if (empty($attributes)) {
            return false;
        }
        // Clean the attributes from unnecessary inputs
        $filtered = $this->cleanUpAttributes($attributes);
        if ($id) {
            $model = $this->query->find($id);
            return $this->update($model, $filtered);
        }
        return $this->create($filtered);
    }

    /**
     * @param array $attributes
     * @param array $identifier
     *
     * @return bool|mixed
     */
    public function defaultUpdateOrCreate(array $attributes, array $identifier = []): mixed
    {
        if (empty($attributes)) {
            return false;
        }
        return $this->query->updateOrCreate($attributes, $identifier);
    }

    /**
     * @param Model $model
     * @return bool|mixed|null
     * @throws Exception
     */
    public function remove(Model $model): mixed
    {
        // Check if has relations
        foreach ($model->getDefinedRelations() as $relation) {
            if ($model->$relation()->count()) {
                return response()->json([
                    'status' => 400,
                    'error' => __("messages.responses.can_not_delete"),
                    'message' => __("messages.responses.can_not_delete"),
                ], 400);
            }
        }
        $this->propertyLogActivity(
            $model,
            auth()->user(),
            "$this->modelName Removed",
            ['action' => 'Removing', 'module' => $this->modelName]
        );
        return $model->delete();
    }

    public function canRemove(Model $model): bool
    {
        // Check if model has relations
        foreach ($model->getDefinedRelations() as $relation) {
            if ($model->$relation()->count()) {
                return false;
            }
        }
        return true;
    }


    /**
     * @param array $relations
     * @return static
     */
    public function has(array $relations = []): static
    {
        foreach ($relations as $relation) {
            $this->query->has($relation);
        }
        return $this;
    }


    /**
     * @param array $relations
     * @return $this
     */
    public function doesntHave(array $relations = []): static
    {
        foreach ($relations as $relation) {
            $this->query->has($relation);
        }
        return $this;
    }

    public function havingRaw($sql): static
    {
        $this->query->havingRaw($sql);
        return $this;
    }

    /**
     * @param array $relations
     * @return $this
     */
    public function whereHas(array $relations = []): static
    {
        foreach ($relations as $relationName => $filters) {
            //            info($relationName);
            if (!method_exists($this->model, $relationName)) {
                //                info("no relation");
                return $this;
            }
            $this->query->whereHas($relationName, function ($query) use ($relationName, $filters) {
                if (!empty($filters)) {
                    //                    info($filters);
                    $relatedModel = $this->getRelatedModel($relationName);
                    if (!$relatedModel) {
                        //                        info("no model");
                        return $this;
                    }
                    foreach ($relatedModel->getFilters() as $filter) {
                        //                        info($filter);
                        if (isset($filters[$filter])) {
                            $withFilter = "of" . ucfirst($filter);
                            $query->$withFilter($filters[$filter]);
                        }
                    }
                }
            });
        }
        return $this;
    }


    /**
     * @param array $columns
     * @return $this
     */
    public function withSum(array $columns = []): static
    {
        foreach ($columns as $column) {
            $split = explode('.', $column);
            if (count($split) == 2) {
                $this->query->withSum($split[0], $split[1]);
            }
        }
        return $this;
    }


    /**
     * @param array $relations
     * @return $this
     */
    public function withCount(array $relations = []): static
    {
        foreach ($relations as $relation) {
            $this->query->withCount($relation);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return $this->query->count();
    }

    /**
     * @param $filters
     * @return int
     */
    public function countWithFilters($filters): int
    {
        $query = $this->query;
        foreach ($this->model->getFilters() as $filter) {
            if (isset($filters[$filter])) {
                $withFilter = "of" . ucfirst($filter);
                $query = $query->$withFilter($filters[$filter]);
            }
        }
        return $query->count();
    }

    /**
     * @return mixed
     */
    public function first(): mixed
    {
        return $this->query->first();
    }

    /**
     * @return bool
     */
    public function exists(): bool
    {
        return $this->query->exists();
    }

    /**
     * @return bool
     */
    public function doesntExist(): bool
    {
        return $this->query->doesntExist();
    }

    /**
     * @param Model $model
     * @param $column
     * @param $value
     * @return void
     */
    public function increment(Model $model, $column, $value): void
    {
        $model->increment($column, $value);
    }

    /**
     * @param Model $model
     * @param $column
     * @param $value
     * @return void
     */
    public function decrement(Model $model, $column, $value): void
    {
        $model->decrement($column, $value);
    }

    /**
     * @param $column
     * @return mixed
     */
    public function sum($column): mixed
    {
        return $this->aggregate('sum', $column);
    }

    /**
     * @param $function
     * @param $column
     * @return mixed
     */
    public function aggregate($function, $column): mixed
    {
        return $this->query->{$function}($column);
    }

    /**
     * @param $ids
     * @return mixed
     */
    public function findIds($ids): mixed
    {
        return $this->query->findOrFail($ids);
    }

    /**
     * @param int $id
     * @param array $relations
     *
     * @return mixed
     */
    public function find(int $id, array $relations = []): mixed
    {
        $query = $this->query;
        if (!empty($relations)) {
            $query = $query->with($relations);
        }
        return $query->find($id);
    }

    /**
     * @param $column
     * @param $data
     * @return mixed
     */
    public function getByKey($column, $data): mixed
    {
        return $this->query->whereIn($column, (array) $data)->get();
    }

    /**
     * @param int $id
     * @param array $relations
     *
     * @return mixed
     */
    public function findOrFail(int $id, array $relations = []): mixed
    {
        $query = $this->query;
        if (!empty($relations)) {
            $query = $query->with($relations);
        }
        return $query->findOrFail($id);
    }

    /**
     * @param string $key
     * @param mixed $value
     * @param bool $fail
     * @return mixed
     */
    public function findBy(string $key, mixed $value, bool $fail = true): mixed
    {
        $model = $this->query->where($key, $value);
        return $fail ? $model->firstOrFail() : $model->first();
    }
    /**
     * @param mixed $fields
     *
     * @return mixed
     */
    public function findByFields(array $fields): mixed
    {
        $query = $this->query;
        if (isset($fields['and'])) {
            $query = $query->where($fields['and']);
        }
        if (isset($fields['or'])) {
            $query = $query->orWhere(function (Builder $query) use ($fields) {
                foreach ($fields['or'] as $condition) {
                    $query = $query->orWhere($condition[0], $condition[1]);
                }
            });
        }
        return $query->first();
    }

    /**
     * @param array $wheres
     * @param array|null $data
     * @return mixed
     */
    public function whereOrCreate(array $wheres, array $data = null): mixed
    {
        return $this->query->firstOrCreate($data ?? $wheres, $wheres);
    }

    /**
     * @param string|null $labelField
     * @param string $valueField
     * @param bool $applyOrder
     * @param string $orderBy
     * @param string $orderDir
     * @param array $conditions
     *
     * @return mixed
     */
    public function findAllForFormSelect(
        string $labelField = null,
        string $valueField = 'id',
        bool $applyOrder = false,
        string $orderBy = self::ORDER_BY,
        string $orderDir = self::ORDER_DIR,
        array $conditions = []
    ): mixed {
        $query = $this->query;
        if ($applyOrder) {
            $query = $query->orderBy($orderBy, $orderDir);
        }
        if (!empty($conditions)) {
            foreach ($conditions as $conditionType => $whereConditions) {
                if ($conditionType == 'where' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->where($field, $value);
                    }
                }

                if ($conditionType == 'whereNot' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->where($field, '!=', $value);
                    }
                }

                if ($conditionType == 'whereDateLess' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereDate($field, '<=', Carbon::parse($value));
                    }
                }
                if ($conditionType == 'whereDateMore' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereDate($field, '>=', Carbon::parse($value));
                    }
                }

                if ($conditionType == 'whereIn' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereIn($field, $value);
                    }
                }

                if ($conditionType == 'whereNotIn' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereNotIn($field, $value);
                    }
                }

                if ($conditionType == 'whereLike' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->where($field, 'like', '%' . $value . '%');
                    }
                }

                if ($conditionType == 'whereBetween' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereBetween($field, $value);
                    }
                }
            }
        }
        return $query->pluck($valueField, $labelField);
    }

    /**
     * @param array $fields
     * @param bool $applyOrder
     * @param string $orderBy
     * @param string $orderDir
     * @return mixed
     */
    public function findAll(array $fields = ['*'], bool $applyOrder = true, string $orderBy = self::ORDER_BY, string $orderDir = self::ORDER_DIR): mixed
    {
        $query = $this->query;
        if ($applyOrder) {
            $query = $query->orderBy($orderBy, $orderDir);
        }
        return $query->get($fields);
    }

    /**
     * @param $query
     * @param array $filters
     * @param array $relations
     * @param bool $applyOrder
     * @param bool $page
     * @param int $limit
     * @param string $orderBy
     * @param string $orderDir
     * @param array $conditions
     * @param bool $customizePaginationURI
     * @param null $paginationURI
     * @param null $orderBy2
     * @param null $orderDir2
     *
     * @return mixed
     */
    public function baseSearch(
        $query,
        array  $filters = [],
        array  $relations = [],
        bool   $applyOrder = true,
        bool   $page = true,
        int    $limit = self::LIMIT,
        string $orderBy = self::ORDER_BY,
        string $orderDir = self::ORDER_DIR,
        array  $conditions = [],
        bool   $customizePaginationURI = false,
        $paginationURI = null,
        $orderBy2 = null,
        $orderDir2 = null
    ): mixed {
        if (!empty($relations)) {
            $query = $query->with($relations);
        }
        if (!empty($filters)) {
            foreach ($this->model->getFilters() as $filter) {
                //if (isset($filters[$filter]) and !empty($filters[$filter])) {
                if (isset($filters[$filter])) {
                    $withFilter = "of" . ucfirst($filter);
                    $query = $query->$withFilter($filters[$filter]);
                }
            }
        }
        if (!empty($conditions)) {
            foreach ($conditions as $conditionType => $whereConditions) {

                if ($conditionType == 'where' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->where($field, $value);
                    }
                }

                if ($conditionType == 'whereNot' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->where($field, '!=', $value);
                    }
                }

                if ($conditionType == 'whereDateLess' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereDate($field, '<=', Carbon::parse($value));
                    }
                }
                if ($conditionType == 'whereDateMore' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereDate($field, '>=', Carbon::parse($value));
                    }
                }

                if ($conditionType == 'whereIn' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereIn($field, $value);
                    }
                }

                if ($conditionType == 'whereNotIn' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereNotIn($field, $value);
                    }
                }

                if ($conditionType == 'whereLike' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->where($field, 'like', '%' . $value . '%');
                    }
                }

                if ($conditionType == 'whereBetween' && !empty($whereConditions)) {
                    foreach ($whereConditions as $field => $value) {
                        $query = $query->whereBetween($field, $value);
                    }
                }
            }
        }
        return $query;
    }

    /**
     * @param array $filters
     * @param array $relations
     * @param bool $applyOrder
     * @param bool $page
     * @param int $limit
     * @param string $orderBy
     * @param string $orderDir
     * @param array $conditions
     * @param bool $customizePaginationURI
     * @param null $paginationURI
     * @param null $orderBy2
     * @param null $orderDir2
     *
     * @return mixed
     */
    public function search(
        array  $filters = [],
        array  $relations = [],
        bool   $applyOrder = true,
        bool   $page = true,
        int    $limit = self::LIMIT,
        string $orderBy = self::ORDER_BY,
        string $orderDir = self::ORDER_DIR,
        array  $conditions = [],
        bool   $customizePaginationURI = false,
        $paginationURI = null,
        $orderBy2 = null,
        $orderDir2 = null,
        $withQueryString = false
    ): mixed {
        $query =  $this->baseSearch(
            $this->query,
            $filters,
            $relations,
            $applyOrder,
            $page,
            $limit,
            $orderBy,
            $orderDir,
            $conditions,
            $customizePaginationURI,
            $paginationURI,
            $orderBy2,
            $orderDir2
        );
        return $this->getQueryResult($query, $applyOrder, $page, $limit, $orderBy, $orderDir, $customizePaginationURI, $paginationURI, $orderBy2, $orderDir2, $withQueryString);
    }

    /**
     * @param array $filters
     * @param array $relations
     * @param bool $applyOrder
     * @param bool $page
     * @param int $limit
     * @param string $orderBy
     * @param string $orderDir
     * @param array $conditions
     * @param bool $customizePaginationURI
     * @param null $paginationURI
     * @param null $orderBy2
     * @param null $orderDir2
     *
     * @return mixed
     */
    public function searchWithTrashed(
        array  $filters = [],
        array  $relations = [],
        bool   $applyOrder = true,
        bool   $page = true,
        int    $limit = self::LIMIT,
        string $orderBy = self::ORDER_BY,
        string $orderDir = self::ORDER_DIR,
        array  $conditions = [],
        bool   $customizePaginationURI = false,
        $paginationURI = null,
        $orderBy2 = null,
        $orderDir2 = null,
        $withQueryString = false
    ): mixed {
        $query =  $this->baseSearch(
            $this->query->withTrashed(),
            $filters,
            $relations,
            $applyOrder,
            $page,
            $limit,
            $orderBy,
            $orderDir,
            $conditions,
            $customizePaginationURI,
            $paginationURI,
            $orderBy2,
            $orderDir2
        );
        return $this->getQueryResult($query, $applyOrder, $page, $limit, $orderBy, $orderDir, $customizePaginationURI, $paginationURI, $orderBy2, $orderDir2, $withQueryString);
    }

    /**
     * @param $query
     * @param bool $applyOrder
     * @param bool $page
     * @param int $limit
     * @param string $orderBy
     * @param string $orderDir
     * @param bool $customizePaginationURI
     * @param null $paginationURI
     * @param null $orderBy2
     * @param null $orderDir2
     *
     * @return mixed
     */
    public function getQueryResult(
        $query,
        bool $applyOrder = true,
        bool $page = true,
        int $limit = self::LIMIT,
        string $orderBy = self::ORDER_BY,
        string $orderDir = self::ORDER_DIR,
        bool $customizePaginationURI = false,
        $paginationURI = null,
        $orderBy2 = null,
        $orderDir2 = null,
        $withQueryString = false,
    ): mixed {
        if ($applyOrder) {
            $query = $query->orderBy($orderBy, $orderDir);
            if (($orderBy2 != null) && ($orderDir2 != null)) {
                $query = $query->orderBy($orderBy2, $orderDir2);
            }
        }

        if (config('app.query_debug')) {
            info($query->toSql());
        }
        if ($customizePaginationURI) {
            $query = $query->paginate($limit);
            return $query->withPath($paginationURI);
        }

        if ($page && $withQueryString){
            return $query->paginate($limit)->withQueryString();
        }

        if ($page) {
            return $query->paginate($limit);
        }

        if ($limit) {
            return $query->take($limit)->get();
        }

        return $query->get();
    }

    protected function cleanUpAttributes($attributes): array
    {
        return collect($attributes)->filter(function ($value, $key) {
            return $this->model->isFillable($key);
        })->toArray();
    }

    /**
     * @param null $groupBy
     * @param array $fields
     * @param array $filters
     * @param array $relations
     * @param bool $applyOrder
     * @param bool $page
     * @param bool $limit
     * @param string $orderBy
     * @param string $orderDir
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Query\Builder[]|\Illuminate\Support\Collection
     */
    public function searchBySelected(
        $groupBy = null,
        array $fields = [],
        array $filters = [],
        array $relations = [],
        bool $applyOrder = false,
        bool $page = false,
        bool $limit = false,
        string $orderBy = self::ORDER_BY,
        string $orderDir = self::ORDER_DIR
    ): array|\Illuminate\Database\Eloquent\Collection|\Illuminate\Contracts\Pagination\LengthAwarePaginator|Collection {
        $query = $this->query;
        if (!empty($relations)) {
            $query = $query->with($relations);
        }
        if (!empty($filters)) {
            foreach ($this->model->getFilters() as $filter) {
                //if (isset($filters[$filter]) and !empty($filters[$filter])) {
                if (isset($filters[$filter])) {
                    $withFilter = "of" . ucfirst($filter);
                    $query = $query->$withFilter($filters[$filter]);
                }
            }
        }
        if (!empty($fields)) {
            $query = $query->selectRaw(implode(',', $fields));
        }
        if (!empty($groupBy)) {
            $query = $query->groupBy(implode(',', $groupBy));
        }
        if ($applyOrder) {
            $query = $query->orderBy($orderBy, $orderDir);
        }
        if ($page) {
            return $query->paginate($limit);
        }
        if ($limit) {
            return $query->take($limit)->get();
        }
        return $query->get();
    }

    /**
     * Create a Pagination From Items Of  array Or collection.
     *
     * @param array|Collection $items
     * @param int $perPage
     * @param int|null $page
     * @param array $options
     *
     * @return LengthAwarePaginator
     */
    public function paginate(array|Collection $items, int $perPage = 15, int $page = null, array $options = []): LengthAwarePaginator
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    /**
     * @param Model $model
     * @param string $relation
     * @param array $attributes
     *
     * @return mixed
     */
    public function relationCreate(Model $model, string $relation, array $attributes = []): mixed
    {
        if (!empty($attributes)) {
            return $model->{$relation}()->create($attributes);
        }
        return false;
    }


    /**
     * @param int $id
     * @param string $field
     *
     * @return mixed
     */
    public function toggleField($id, $field)
    {
        $model = $this->findOrFail($id);
        $newVal = 1;
        if($model[$field] == 1 ){
            $newVal = 0;
        }
        $model = $this->update($model, [$field => $newVal]);

        return $model;
    }
}
