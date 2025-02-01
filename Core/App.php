<?php

namespace Core;

class App{
  protected static $conatiner;

  public static function setContainer($container){
    static::$conatiner = $container;
  }

  public static function container(){
    return static::$conatiner;
  }

  public static function bind($key, $resolver){
    static::container()->resolve($key, $resolver);
  }

  public static function resolve($key){
    return static::container()->resolve($key);
  }
}