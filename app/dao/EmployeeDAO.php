<?php

namespace App\Dao;

use App\Models\Employee;

class EmployeeDAO extends Mockup{
  protected $table = "employee";

  public function insert(Employee $Employee){
    $sql = "INSERT INTO $this->table 
            (name, code)
            VALUES 
            (:name, :code)";
    $execute = Database::prepare($sql);
    //$execute->bindValue(':create_date', $Appointment->getCreate_date());
    //$execute->bindValue(':update_date', $Appointment->getUpdate_date());
    //$execute->bindValue(':start_date', $Appointment->getStart_date());
    //$execute->bindValue(':end_date', $Appointment->getEnd_date());
    //$execute->bindValue(':total_time', $Appointment->getStart_date());
    $execute->bindValue(':name', $Employee->getName());
    //$execute->bindValue(':enabled', $Appointment->getEnabled());
    $execute->bindValue(':code', $Employee->getCode());

    return $execute->execute();
  }
}