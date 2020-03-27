<?php
$conexion = mysqli_connect("127.0.0.1", "root", "", "proyecto")
session_start();
$_SESSION['Nombre'] = $_REQUEST['camponombre'];
$_SESSION['Apellido'] = $_REQUEST['campoapellido'];
$_SESSION['Direccion'] = $_REQUEST['campodireccion'];
$_SESSION['Email'] = $_REQUEST['campomail'];
echo "Estas Registrado.";
?>