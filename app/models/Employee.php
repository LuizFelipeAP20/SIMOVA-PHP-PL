<?php

namespace App\Models;


class Employee{
  private $id;
  private $name;
  private $code;

  public function __construct( $name, $code){
    $this->name = $name;
    $this->code = $code;
  }

  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->name;
  }

  public function getCode(){
    return $this->code;
  }
}