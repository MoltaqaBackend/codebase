<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\BaseContract;
use App\Traits\ApiResponseTrait;
use Illuminate\Support\Str;

class BaseApiController extends Controller
{
    use ApiResponseTrait;

    protected bool $order = true;
    protected $orderBy = 'id';
    protected BaseContract $repository;
    protected mixed $modelResource;
    protected array $relations = [];

    /**
     * BaseApiController constructor.
     *
     * @param BaseContract $repository
     * @param mixed $modelResource
     */
    public function __construct(BaseContract $repository, mixed $modelResource, $model = null)
    {

        $this->middleware(['role_or_permission:' . Str::plural($model) . ' index|'.activeGuard()])->only(['__invoke', 'index']);
        $this->middleware(['role_or_permission:' . Str::plural($model) . ' edit|'.activeGuard()])->only('update');
        $this->middleware(['role_or_permission:' . Str::plural($model) . ' create|'.activeGuard()])->only('create');
        $this->middleware(['role_or_permission:' . Str::plural($model) . ' delete|'.activeGuard()])->only('destroy');


        $this->repository = $repository;
        $this->modelResource = $modelResource;

        // Include embedded data
        if (request()->has('embed')) {
            $this->parseIncludes(request('embed'));
        }
    }

    /**
     * index() Display a listing of the resource.
     *
     * @return mixed
     */
    public function index(): mixed
    {
        $page = 1;
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
        $models = $this->repository->search($filters, $this->relations, $order, $page, $limit, $orderBy);
        return $this->respondWithCollection($models);
    }


    /**
     * parseIncludes() used to explode embed relations array
     *
     * @param $embed
     */
    protected function parseIncludes($embed): void
    {
        $this->relations = explode(',', $embed);
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
        $resource = new $this->modelResource($model->load($this->relations)); // ???
        return $this->setStatusCode($statusCode)->respond($resource, $headers);
    }

}
