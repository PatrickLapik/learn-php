<?php

class Box {
  public static $count = 0;

  public static function test() {
    var_dump(static::class);
  }
}

class MetalBox extends Box {

}

Box::$count = 1;
MetalBox::test();
var_dump(Box::$count);
