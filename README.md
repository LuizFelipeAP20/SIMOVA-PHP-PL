## O que foi feito?

API para receber dados de Apontamentos de um Funcionário para registrar as suas tarefas realizadas no dia, vamos trabalhando com 3 rotas: 
* Inserção
* Alteração 
* Obtenção dos dados

### Como foi feito?

Foi utilizado o framework php Slim, com padrão MVC mais uma camada de dados
para melhor abstração, apenas uma conexão usando PDO
orientada a objeto. Foi utilizado o Twig como template engine.

Lista de ferramentas:
* Slim Framework
* Twig Template Engine
* Bootstrap 4 
* MySQL
* Php >= 7.4
* Composer
* Phpunit
* PDO

### O que é preciso para executar projeto?

Para que o projeto funcione corretamente é necessário ter 
* PHP superior a 5.5 
* MySQL

### Como executar projeto?

1. Acesse "SIMOVA-API/app/dao/Database.php" configure os "define" com as informacões de conexão ao MySQL
2. Importe o banco simova_db.sql que encontra-se na raiz do projeto em "SIMOVA-API/" ao seu MySQL
3. Na raiz do projeto em "SIMOVA-API/" execute o comando abaixo para instalar as dependencias do projeto
   
       * Composer install
   
5. Depois este para inicializar o servidor php:

       * php -S localhost:8080 -t public public/index.php
    
6. Acesse no navegador http://localhost:8080

7. Rotas utilizadas:
   
      * $app->get('/', 'AppointmentController:home');

       //rotas de apontamentos
      * $app->get('/appointment', 'AppointmentController:home');
      * $app->post('/appointment/new', 'AppointmentController:add');
      * $app->post('/appointment/update', 'AppointmentController:alter');

       //rota criação de funcionario
      * $app->post('/employee/new', 'EmployeeController:add');