<?php

require 'configurar.php';

$id = 0;

if(isset($_POST['Nombre']) && empty ($_POST['Nombre']) == false) {
       $id = $_POST['id'];
       $Nombre = addslashes($_POST['Nombre']);
       $descripcion = addslashes($_POST['descripcion']);  
       $fechadeinicio = addslashes($_POST['fecha de inicio']); 
       $fechafinal = addslashes($_POST['fechafinal']);  

      
       $actualizarusuario = "UPDATE usuarios SET Nombre = '$Nombre', descripcion = '$descripcion',fecha de inicio ='$fechadeinicio', fecha final = '$fechafinal'  WHERE id = '$id'";
       $pdo->query($actualizarusuario);

       header("Location: index.php");
}

?>