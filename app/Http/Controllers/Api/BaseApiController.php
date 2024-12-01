<?php

namespace App\Http\Controllers\Api;

use App\Enum\UserTypeEnum;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\BaseContract;
use App\Traits\ApiResponseTrait;

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

        if (
            auth('api')->check()
            && in_array(auth('api')->user()->type, [UserTypeEnum::ADMIN, UserTypeEnum::PROVIDER, UserTypeEnum::EMPLOYEE])
        ) {
            $this->middleware(['permission:' . $model . '-index'])->only(['__invoke', 'index']);
            $this->middleware(['permission:' . $model . '-edit'])->only('update');
            $this->middleware(['permission:' . $model . '-create'])->only('create');
            $this->middleware(['permission:' . $model . '-delete'])->only('destroy');
        }

        $this->repository = $repository;
        $this->modelResource = $modelResource;

        # Include relations data
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
        $response = [
            'status' => $this->getStatusCode() ?? 200,
            'message' => !empty($data['message']) ? $data['message'] : '--',
            'data' => $resources
                ->additional(['status' => $this->getStatusCode()])
                ->response()->getData(true),
            'errors' => !empty($data['errors']) ? $data['errors'] : new \stdClass(),
        ];
        return response()->json($response, $this->getStatusCode(), $headers);
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
