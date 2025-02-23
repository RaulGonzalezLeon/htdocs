<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","","inmobiliaria");
  return $con;
}
?>