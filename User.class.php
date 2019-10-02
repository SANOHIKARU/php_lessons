<?php

// User
class User
{
  // property
  public $name;

  //constructor
  public function __construct($name)
  { //  なまえが決まっている
    $this->name = $name;  //$this->nameでこのクラスのnameを指定できる
  }

  //method
  /* final */
  public function sayHi()
  {
    echo "hi, i am $this->name!";
  }

  public static function getMessage()
  {
    echo "hello from User class!";
  }
}