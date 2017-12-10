<?php 

//clase para eliminar sesiones en el navegador
session_start();
session_destroy();
header('location: index.php');
?>