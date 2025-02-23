<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("conexion.php");
  $con=retornarConexion();
  

  mysqli_query($con, "UPDATE propiedades SET 
    titulo = '$params->titulo',
    descripcion = '$params->descripcion',
    direccion = '$params->direccion',
    ciudad = '$params->ciudad',
    precio = $params->precio,
    habitaciones = $params->habitaciones,
    banos = $params->banos,
    superficie = $params->superficie
    WHERE id = $params->id");
    
  
  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'datos modificados';

  header('Content-Type: application/json');
  echo json_encode($response);  
?>