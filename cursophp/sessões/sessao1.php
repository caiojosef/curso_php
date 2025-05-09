<?php 
session_start();
$_SESSION['cor'] = "VERDE";
$_SESSION['carro'] = "VELOSTER";

echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br> " . session_id();

?>