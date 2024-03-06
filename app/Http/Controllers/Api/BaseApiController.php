<?php

namespace App\Http\Controllers\Api;

use App\Enum\UserTypeEnum;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\BaseContract;
use App\Traits\ApiResponseTrait;
// use Illuminate\Support\Str;
use Spatie\Permission\Exceptions\UnauthorizedException;

class BaseApiController extends Controller
{
    use ApiResponseTrait;

    protected bool $order = true;
    protected int $page = 1;
    protected string $orderBy = 'id';
    protected BaseContract $repository;
    protected mixed $modelResource;
    protected array $relations = [];
    protected array $conditions = [];

    /**
     * BaseApiController constructor.
     *
     * @param BaseContract $repository
     * @param mixed $modelResource
     */
    public function __construct(BaseContract $repository, mixed $modelResource, $model = null)
    {
         # All Letters must be small
         if (!ctype_lower($model)) 
            $model = strtolower($model);
        
        if (auth(activeGuard())->check() && !in_array(auth(activeGuard())->user()->type, [UserTypeEnum::ADMIN])) {
            throw new UnauthorizedException(401, __('messages.responses.role_not_exists'));
        } else {
            $this->middleware(['role_or_permission:' . $model . '-index|' . activeGuard()])->only(['__invoke', 'index']);
            $this->middleware(['role_or_permission:' . $model . '-edit|' . activeGuard()])->only('update');
            $this->middleware(['role_or_permission:' . $model . '-create|' . activeGuard()])->only('create');
            $this->middleware(['role_or_permission:' . $model . '-delete|' . activeGuard()])->only('destroy');
        }

        // if (auth(activeGuard())->check() && auth(activeGuard())->user()->type == UserTypeEnum::CLIENT) {
        //     if (!auth(activeGuard())->user()->hasAnyRole(['client']))
        //         throw new UnauthorizedException(401, __('messages.responses.role_not_exists'));
        // } else {
        //     $this->middleware(['permission:' . Str::plural($model) . '-index|' . activeGuard()])->only(['__invoke', 'index']);
        //     $this->middleware(['permission:' . Str::plural($model) . '-edit|' . activeGuard()])->only('update');
        //     $this->middleware(['permission:' . Str::plural($model) . '-create|' . activeGuard()])->only('create');
        //     $this->middleware(['permission:' . Str::plural($model) . '-delete|' . activeGuard()])->only('destroy');
        // }

        $this->repository = $repository;
        $this->modelResource = $modelResource;

        // Include relations data
        if (request()->has('loadRelations')) {
            $this->includeRelations(request('loadRelations'));
        }
    }

    /**
     * index() Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(): mixed
    {
        $page = $this->page;
        $limit = 10;
        $order = $this->order;
        $orderBy = $this->orderBy;
        $filters = request()->all();
        if (request()->has('page')) {
            $page = request('page');
        }
        if (request()->has('limit')) {
            $limit = request('limit');
        }
        if (request()->has('order')) {
            $order = request('order');
        }
        if (request()->has('orderBy')) {
            $orderBy = request('orderBy');
        }

        $models = $this->repository->search(
            filters: $filters,
            relations: $this->relations,
            applyOrder: $order,
            page: $page,
            limit: $limit,
            orderBy: $orderBy,
            conditions: $this->conditions
        );
        return $this->respondWithCollection($models);
    }


    /**
     *
     * @param $relations
     */
    protected function includeRelations($relations): void
    {
        $this->relations = is_array($relations) ? $relations : explode(',', $relations);
    }

    /**
     * respond() used to return resource with status and headers
     *
     * @param $resources
     * @param array $headers
     * @return mixed
     */
    protected function respond($resources, array $headers = []): mixed
    {
        return $resources
            ->additional(['status' => $this->getStatusCode()])
            ->response()
            ->setStatusCode($this->getStatusCode())
            ->withHeaders($headers);
    }

    /**
     * respondWithCollection() used to take collection
     * and return its data transformed by resource response
     *
     * @param $collection
     * @param int|null $statusCode
     * @param array $headers
     * @return mixed
     */
    protected function respondWithCollection($collection, int $statusCode = null, array $headers = []): mixed
    {
        $statusCode = $statusCode ?? 200;
        $resources = forward_static_call([$this->modelResource, 'collection'], $collection);
        return $this->setStatusCode($statusCode)->respond($resources, $headers);
    }

    /**
     * respondWithModel() used to return result with one model relation
     *
     * @param $model
     * @param int|null $statusCode
     * @param array $headers
     * @return mixed
     */
    protected function respondWithModel($model, int $statusCode = null, array $headers = []): mixed
    {
        $statusCode = $statusCode ?? 200;
        $resource = forward_static_call([$this->modelResource, 'make'], $model->load($this->relations));
        return $this->setStatusCode($statusCode)->respond($resource, $headers);
    }

}
