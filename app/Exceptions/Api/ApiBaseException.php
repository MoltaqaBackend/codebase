<?php
 
namespace App\Exceptions\Api;
 
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        $dir = substr(__DIR__,0,-14);
        $backtrace =  $this->getTraceAsString();
        $backtrace = str_replace([$dir],"", $backtrace);
        $backtrace = preg_replace('^(.*vendor.*)\n^','',$backtrace);
        $loggedError = '@channel'.PHP_EOL.'****************'.PHP_EOL.env('APP_NAME').PHP_EOL.'****************'.PHP_EOL. '**Critical:**' . PHP_EOL . $this->getMessage() . PHP_EOL. '**Line:** ' . PHP_EOL . $this->getLine() . PHP_EOL. '**File:** ' . PHP_EOL . $this->getFile() . PHP_EOL . '**Trace:**'.PHP_EOL.$backtrace;
        Log::channel('slack')->critical($loggedError);
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