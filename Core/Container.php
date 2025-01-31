<?php

namespace Core;

class Container{
  protected $bindings = [];

  public function bind($key, $func){
    $this->bindings[$key] = $func;
  }

  public function resolve($key){

    if(array_key_exists($key, $this->bindings)){
      $resolver = $this->bindings[$key];
      return call_user_func($resolver);
    }else{
      throw new \Exception("no matching binding found for {$key}");
    }
  }
}