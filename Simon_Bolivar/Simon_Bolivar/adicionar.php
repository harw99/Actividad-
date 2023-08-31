<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>estudiantes</title>

  </head>

  <body class="text-center">

    <?php require 'configurar.php'; 

     if(isset($_POST['Nombre']) && empty ($_POST['Nombre']) == false) { 

    $Nombre = addslashes($_POST['Nombre']);
    $descripcion = addslashes($_POST['descripcion']);
    $fechadeinicio = addslashes($_POST['fecha de inicio']);
    $fechafinal = addslashes($_POST['fecha final']);

    $insertarusuario = "INSERT INTO usuarios SET Nombre = '$Nombre', descripcion = '$descripcion', fecha de inicio = '$fechadeinicio', fecha final = '$fechafinal'";
    $pdo->query($insertarusuario);

    header("Location: index.php");

    }

    ?>    
    <form method="post" class="form-signin">
      <input type="Nombre" class="form-control" placeholder="Nombre" name="Nombre" required autofocus>      
      <input type="descripcion" class="form-control" placeholder="descripcion" name="descripcion" required>
      <input type="fecha de inicio" class="form-control" placeholder="fecha de inicio" name="fecha de inicio" required>
      <input type="fecha final" class="form-control" placeholder="fecha final" name="fecha final" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registar nuevo usuario</button>
      <p class="mt-5 mb-3 text-muted">&copy; </p>
    </form>
  </body>

</html>