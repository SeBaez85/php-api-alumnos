<?php 
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Redbean installation
require 'rb.php';

// DB connection setup
R::setup( 'mysql:host=localhost;dbname=app_alumnos_php', '', '' );

// Create Router instance
$router = new \Bramus\Router\Router();

$router->options('.*', function(){
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-with");
    exit();
});

function jsonResponse($data){
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
     echo json_encode($data);
}

// Define routes
$router->get('/', function() {
    $alumnos = R::find('alumnos');
    jsonResponse(R::exportAll($alumnos));
});

$router->post('/', function(){
    $data = json_decode(file_get_contents('php://input'), true);
    $alumno = R::dispense('alumnos');
    $alumno->nombres = $data['nombres'];
    $alumno->apellidos = $data['apellidos'];
    $id = R::store($alumno);
    jsonResponse(['mensaje'=>'Alumno agregado', 'id'=>$id]);

});

$router->delete('/{id}', function($id){
  R::trash('alumnos', $id);
  jsonResponse(['mensaje'=>'Alumno eliminado']);
});

// Run it!
$router->run();
?>