<?php
 
namespace App\Exceptions\Api;
 
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class ApiBaseException extends Exception
{
    protected $errors;

    public function __construct(array $errors,string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message,$code,$previous);
        $this->errors = $errors;
    }

    /**
     * Report the exception without vendor code.
     * 
     */
    public function report(): void
    {
        
    }
 
    /**
     * Render the exception into an HTTP response.
     */
    public function render(Request $request): JsonResponse
    {
        return apiErrors($this->errors ?? [],[],$this->message,$this->code);
    }

    public static function wrongImplementation($errors,$code = null){
        return new self($errors,__("Failed Operation"),$code ?? 500);
     }
}