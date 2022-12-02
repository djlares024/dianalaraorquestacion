<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Materias.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $materias = new Materias($db);

  // Get clave_materia
  $materias->clave_materia = isset($_GET['clave_materia']) ? $_GET['clave_materia'] : die();

  // Get post
  $materias->read_single();

  // Create array
  $materias_arr = array(
    'clave_materia' => $materias->clave_materia,
    'nombre_materia' => $materias->nombre_materia,
    'semestre' => $materias->semestre,
    'creditos' => $materias->creditos
  );

  // Make JSON
  print_r(json_encode($materias_arr));