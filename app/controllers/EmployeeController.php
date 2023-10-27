<?php

namespace App\Controllers;

use App\Dao\EmployeeDAO;
use App\Models\Employee;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class EmployeeController{
  protected $container;

  public function __construct(ContainerInterface $container){
    $this->container = $container;
  }

  public function add(Request $request, Response $response){
   
    $employee = new Employee($_POST['name'], $_POST['code']);

    $employeeDAO = new EmployeeDAO(); 
    if ($employeeDAO->insert($employee)) 
      return $response->withStatus(302)->withHeader("Location", "/appointment"); 
  }

}