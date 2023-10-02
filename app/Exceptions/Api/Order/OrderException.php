<?php
 
namespace App\Exceptions\Api\Order;

use App\Exceptions\Api\ApiBaseException;
 
class OrderException extends ApiBaseException
{
   public static function orderFailedRegistration($errors,$code = null){
      return new self($errors,__("Failed Operation"),$code ?? 500);
   }
}