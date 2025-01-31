<?php

namespace Core;

class App{
  protected static $conatiner;

  public static function setContainer($container){
    static::$conatiner = $container;
  }

  public static function container($container){
    return static::$conatiner;
  }
}