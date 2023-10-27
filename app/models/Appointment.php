<?php

namespace App\Models;


class Appointment{
  private $id;
  private $create_date;
  private $update_date;
  private $start_date;
  private $end_date;
  private $total_time;
  private $id_employe;
  private $enabled;
  private $description_work;

  public function __construct($id_employe, $description_work ){
    $this->id_employe = $id_employe;
    $this->description_work = $description_work;
  }


  public function getId(){
    return $this->id;
  }
  public function getCreate_date(){
    return $this->create_date;
  }

  public function getUpdate_date(){
    return $this->update_date;
  }
  public function getStart_date(){
    return $this->start_date;
  }
  public function getEnd_date(){
    return $this->end_date;
  }
  public function getTotal_time(){
    return $this->total_time;
  }
  public function getId_employe(){
    return $this->id_employe;
  }
  public function getEnabled(){
    return $this->enabled;
  }
  public function getDescription_work(){
    return $this->description_work;
  }
}