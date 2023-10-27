<?php

namespace App\Controllers;

use App\Dao\AppointmentDAO;
use App\Models\Appointment;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class AppointmentController{
  protected $container;

  public function __construct(ContainerInterface $container){
    $this->container = $container;
  }

  public function home(Request $request, Response $response){
    $appointmentDAO = new AppointmentDAO(); 
    $data['appointment'] = $appointmentDAO->findAll(); 
    return $this->container->view->render($response, 'appointment.html.twig', $data); 
  }

  public function add(Request $request, Response $response){
    
    $appointment = new Appointment($_POST['id_employe'], $_POST['description_work']);

    $AppointmentDAO = new AppointmentDAO(); 
    if ($AppointmentDAO->insert($appointment)) 
      return $response->withStatus(302)->withHeader("Location", "/appointment"); 
  }

  public function alter(Request $request, Response $response){
    
    $appointment = new Appointment($_POST['id_employe'], $_POST['description_work']);

    $AppointmentDAO = new AppointmentDAO(); 
    if ($AppointmentDAO->update($appointment)) 
      return $response->withStatus(302)->withHeader("Location", "/appointment"); 
  }
}