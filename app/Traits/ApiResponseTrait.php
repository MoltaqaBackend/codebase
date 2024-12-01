<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponseTrait
{
    protected ?int $statusCode = null;

    /**
     * setStatusCode() set status code value
     *
     * @param $statusCode
     * @return $this
     */
    protected function setStatusCode($statusCode): static
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * respondWithArray() used to return json response array with status and headers
     *
     * @param $data
     * @param array $headers
     * @return JsonResponse
     */
    protected function respondWithArray($data, array $headers = []): JsonResponse
    {
        $response = [
            'status' => $data['status'] ?? 200,
            'message' => !empty($data['message']) ? $data['message'] : '--',
            'data' => !empty($data['data']) ? $data['data'] : new \stdClass(),
            'errors' => !empty($data['errors']) ? $data['errors'] : new \stdClass(),
        ];
        return response()->json($response, $data['status'] ?? 200, $headers);
    }

    /**
     * getStatusCode() return status code value
     *
     * @return int
     */
    protected function getStatusCode(): int
    {
        return $this->statusCode ?: 200;
    }

    /**
     * respondWithSuccess() used to return success message
     *
     * @param string|null $message
     * @param array $data
     * @return JsonResponse
     */
    protected function respondWithSuccess(string $message = null, array $data = []): JsonResponse
    {
        $response = [
            'status' => 200,
        ];
        $response['message'] = !empty($message) ? $message : __('Success');
        if (!empty($data)) {
            $response['data'] = $data;
        }
        return $this->setStatusCode(200)->respondWithArray($response);
    }

    /**
     * @param string|null $message
     * @param mixed $data
     * @return JsonResponse
     */
    protected function respondWithCollection(mixed $collection, int $statusCode = null, $headers = []): mixed
    {
        $statusCode = $statusCode ?? 200;
        return $this->setStatusCode($statusCode)->respond($collection, $headers);
    }

    protected function respondWithModelData($model, int $statusCode = null, array $headers = []): mixed
    {
        $statusCode = $statusCode ?? 200;
        return $this->setStatusCode($statusCode)->respond($model, $headers);
    }

    protected function respondWithError($message, $errors = []): JsonResponse
    {
        return $this->respondWithErrors($message, $this->statusCode, $errors, $message);
    }

    protected function respondWithErrors(
        string $errors = 'messages.error',
               $statusCode = null,
        array  $data = [],
               $message = null
    ): JsonResponse
    {
        $statusCode = !empty($statusCode) ? $statusCode : 400;
        if (is_string($errors)) {
            $errors = __($errors);
        }
        $response = ['status' => $statusCode, 'message' => $message, 'errors' => ['message' => [$errors]]];

        if (!empty($message)) {
            $response['message'] = $message;
        }
        if (!empty($data)) {
            $response['errors'] = $data;
        }
        return $this->setStatusCode($statusCode)->respondWithArray($response);
    }

    /**
     * respondWithBoolean() used to determine if process success or failed
     *
     * @param $result
     * @return JsonResponse
     */
    protected function respondWithBoolean($result): JsonResponse
    {
        return $result ? $this->respondWithSuccess() : $this->errorUnknown();
    }


    public function errorWrongArgs($message = null): JsonResponse
    {
        if (empty($message)) {
            $message = __('Wrong Arguments');
        }
        return $this->setStatusCode(400)->respondWithError($message);
    }


    public function errorUnauthorized($message = null): JsonResponse
    {
        if (empty($message)) {
            $message = __('Unauthorized');
        }
        return $this->respondWithErrors($message, 401);
    }


    public function errorForbidden($message = null): JsonResponse
    {
        if (empty($message)) {
            $message = __('Forbidden');
        }
        return $this->setStatusCode(403)->respondWithError($message);
    }


    public function errorNotFound($message = null): JsonResponse
    {
        if (empty($message)) {
            $message = __('Not Found');
        }
        return $this->setStatusCode(404)->respondWithError($message);
    }


    public function errorInternalError($message = null): JsonResponse
    {
        if (empty($message)) {
            $message = __('Internal Server Error');
        }
        return $this->setStatusCode(500)->respondWithError($message);
    }


    public function errorUnknown(string $message = 'dashboard.unknown_error'): JsonResponse
    {
        if (empty($message)) {
            $message = __('Unknown Error');
        }
        return $this->setStatusCode(500)->respondWithError($message);
    }


    public function respondWithJson($data, int $statusCode = 200): JsonResponse
    {
        return response()->json($data, $statusCode);
    }


    protected function respond($resources, array $headers = []): mixed
    {
        $response = [
            'status' => $this->getStatusCode() ?? 200,
            'message' => !empty($data['message']) ? $data['message'] : '--',
            'data' => $resources
                ->additional(['status' => $this->getStatusCode()]),
            'errors' => !empty($data['errors']) ? $data['errors'] : new \stdClass(),
        ];
        return response()->json($response, $this->getStatusCode(), $headers);
    }


}
