<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","","db1");
  return $con;
}
?>