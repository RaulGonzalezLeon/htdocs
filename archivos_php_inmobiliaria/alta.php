<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("conexion.php");
  $con=retornarConexion();
  

  mysqli_query($con, "INSERT INTO propiedades (titulo, descripcion, direccion, ciudad, precio, habitaciones, banos, superficie) 
  VALUES ('$params->titulo', '$params->descripcion', '$params->direccion', '$params->ciudad', $params->precio, $params->habitaciones, $params->banos, $params->superficie)");
  
    
  
  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'datos grabados';

  header('Content-Type: application/json');
  echo json_encode($response);  
?>