<?php

namespace Core\Middleware;

class middleware{
  public const MAP = [
    'guest' => Guest::class,
    'auth' => Auth::class,
  ];

  public static function resolve($key){
    if(!$key){
      return;
    }

      $middleware = static::MAP[$key] ?? false;

      if(!$middleware){
        throw new \Exception('no matching middleware found for '.$key);
      }

      (new $middleware)->handle();        


  }
}