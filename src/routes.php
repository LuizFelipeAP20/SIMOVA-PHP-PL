<?php

$app->get('/', 'AppointmentController:home');

//rotas de apontamentos
$app->get('/appointment', 'AppointmentController:home');
$app->post('/appointment/new', 'AppointmentController:add');
$app->post('/appointment/update', 'AppointmentController:alter');

//rota criação de funcionario
$app->post('/employee/new', 'EmployeeController:add');