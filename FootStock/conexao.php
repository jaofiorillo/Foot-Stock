<?php
    $host = 'localhost';
    $bancodedados = 'japonike';
    $usuario = 'root';
    $senha = '1234';
  
  $con = new mysqli($host, $usuario, $senha,$bancodedados );
  if($con->connect_errno) {
    die ("Falha ao conectar:" . $conn->error); 
  }
?>