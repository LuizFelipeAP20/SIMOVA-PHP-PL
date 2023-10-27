<?php

namespace App\Dao;

use App\Models\Appointment;

class AppointmentDAO extends Mockup{
  protected $table = "appointment";

  public function findAll(){
    $sql = "SELECT * FROM $this->table t, employee e where t.id = e.code";
    $execute = Database::prepare($sql);
    $execute->execute();
    return $execute->fetchAll();
  }
  public function insert(Appointment $Appointment){
    $sysdate = date('d/m/Y'); 
    $sql = "INSERT INTO $this->table 
            (create_date, update_date, start_date, end_date, total_time, id_employe, enabled, description_work)
            VALUES 
            ($sysdate, $sysdate, $sysdate, $sysdate, null, :id_employe, '0', :description_work)";
    $execute = Database::prepare($sql);
    //$execute->bindValue(':create_date', $Appointment->getCreate_date());
    //$execute->bindValue(':update_date', $Appointment->getUpdate_date());
    //$execute->bindValue(':start_date', $Appointment->getStart_date());
    //$execute->bindValue(':end_date', $Appointment->getEnd_date());
    //$execute->bindValue(':total_time', $Appointment->getStart_date());
    $execute->bindValue(':id_employe', $Appointment->getId_employe());
    //$execute->bindValue(':enabled', $Appointment->getEnabled());
    $execute->bindValue(':description_work', $Appointment->getDescription_work());

    return $execute->execute();
  }

  public function update(Appointment $Appointment){
    $sysdate = date('d/m/Y'); 
    $sql = "UPDATE $this->table 
            SET description_work = :description_work, update_date = $sysdate, enabled = '0', end_date = $sysdate, total_time = start_date - $sysdate
            WHERE id = :id_employe";
    $execute = Database::prepare($sql);
    $execute->bindValue(':id_employe', $Appointment->getId_employe());
    $execute->bindValue(':description_work', $Appointment->getDescription_work());

    return $execute->execute();
  }
}