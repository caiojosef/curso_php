<?php 
session_start();
echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br> " . session_id();
session_unset();
echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br> " . session_id();
session_destroy();
echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br> " . session_id();

?>