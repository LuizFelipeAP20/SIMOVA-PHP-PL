<?php

namespace App\Dao;

abstract class Mockup extends Database{
  protected $table; 

  public function find($id){
    $sql = "SELECT * FROM $this->table WHERE id = :id";
    $execute = Database::prepare($sql);
    $execute->bindParam(':id', $id, \PDO::PARAM_INT);
    $execute->execute();
    return $execute->fetch();
  }

  public function findAll(){
    $sql = "SELECT * FROM $this->table";
    $execute = Database::prepare($sql);
    $execute->execute();
    return $execute->fetchAll();
  }


}
