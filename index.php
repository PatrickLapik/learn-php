<?php

class Box {
  public $var;
  public $foo;
  public function __construct($var, $foo) {
    var_dump($var, $foo);

    $this->var = $var;
    $this->foo = $foo;
  }
  public function __set($name, $value) {
    var_dump($name, $value);
  }
  public function __get($name) {
    return "property $name does not exist";
  }
  public function __call($name, $args) {
    var_dump($name, $args);
  }
  public function __destruct() {
    echo 'box was destroyed :"(';
  }
}

$box = new Box('dr', 'vitt');

$box->bar = 'asd;k';
var_dump($box->ks);

$box->hello(1,2,3,4,4);

var_dump(serialize($box));
