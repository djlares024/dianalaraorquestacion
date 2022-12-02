<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Materias.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $materias = new Materias($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  // Set clave_materia to update
  $materias->clave_materia = $data->clave_materia;

  // Delete post
  if($materias->delete()) {
    echo json_encode(
      array('message' => 'materia Deleted')
    );
  } else {
    echo json_encode(
      array('message' => 'materia Not Deleted')
    );
  }

