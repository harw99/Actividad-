<?php 

require 'configurar.php';

if(isset($_POST['Nombre']) && empty ($_POST['Nombre']) == false) { 

$senha = '';

$Nombre = addslashes($_POST['Nombre']);
$email = addslashes($_POST['descripcion']);
$telefono = addslashes($_POST['fecha de inicio']);
$telefono = addslashes($_POST['fecha final']);


$inserirusuario = "INSERT INTO usuarios SET Nombre = '$Nombre', descripcion = '$descripcion', fecha de inicio = '$fechadeinicio', fecha final = '$fechafinal'";
$pdo->query($inserirusuario);

header("Location: index.php");

}

?>