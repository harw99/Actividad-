<!doctype html>
<html lang="es">
  <head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">


    

    <title> Usuarios</title>
  </head>
  
  <body>
  
  	<?php require 'configurar.php'; ?>

  	<div class="container-fluid">
  		<div class="col-md-12 mb-2 mt-2">
  			<div class="row justify-content-center">
  				<button class="btn btn-primary " data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-circle-plus"></i> Adicionar nuevo usuario</button>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12">
				<table class="table mt -10"  id="tabla">
				  <thead>
				    <tr>
				         <th scope="col">Nombre</th>
				          <th scope="col">descripcion</th>
				          <th scope="col">fecha de inicio </th>
				           <th scope="col">fecha final</th>
				    </tr>
				  </thead>
				  <body>
			  		<?php 

			  		$listaruruarios = "SELECT * FROM usuarios ORDER BY id DESC";
			  		$listaruruarios = $pdo->query($listaruruarios);

			  		if ($listaruruarios->rowCount() > 0) {
			  			foreach ($listaruruarios->fetchAll() as $usuario) {
			  				echo '<tr>';
			  				echo '<td>'.$usuario['Nombre'].'</td>';
			  				echo '<td>'.$usuario['descripcion'].'</td>';
			  				echo '<td>'.$usuario['fecha de inicio'].'</td>';
                            echo '<td>'.$usuario['fecha final'].'</td>';
			  				echo '<td><button class="btn btn-primary" data-toggle="modal" data-target="#modal2'.$usuario['id'].'"> <i class="fa-solid fa-pen-to-square"></i> Editar</button>		  			
				      	 			  <a href="excluir.php?id='.$usuario['id'].'"><button onclick="return confirm(\'Esta seguro que desea eliminar?\');" type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</button></a></td>';			  			
			  				echo '<tr>';

							echo '<!-- Modal Editar -->

								<div class="modal fade" id="modal2'.$usuario['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Editar usuário</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
									    <form action="editar.php" method="post" class="form-signin">
									      <input id="id" class="form-control" value="'.$usuario['id'].'" name="id" type="hidden"> 									    
									      <input type="text" class="form-control" placeholder="Nombre" name="Nombre" value="'.$usuario['Nombre'].'" required autofocus>    
									      <input type="text" class="form-control" placeholder="descripcion" name="descripcion" value="'.$usuario['descripcion'].'" required>
										  <input type="text" class="form-control" placeholder="fecha de inicio" name="fecha de inicio" value="'.$usuario['fecha de inicio'].'" required>
                                          <input type="text" class="form-control" placeholder="fecha final" name="fecha final" value="'.$usuario['fecha final'].'" required>
									      <button class="btn btn-lg btn-primary btn-block" type="submit">Actualizar datos</button>
									    </form>
								      </div>
								    </div>
								  </div>
                                  
								</div>	

								<!-- Modal Editar -->';		  				
			  			}
			  		}
			  		?>
				  </body>
				</table>
			</div>	
		</div>	
	</div>

	<!-- Modal Adicionar -->

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-floppy-disk"></i> Ingresar  Usuário</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">	      	
			<form method="post" action="inserir.php" class="form-signin">
				<input type="text" class="form-control" placeholder="Nombre" name="Nombre" required autofocus>      
				<input type="descripcion" class="form-control" placeholder="descripcion" name="descripcion" required>	
                <input type="text" class="form-control" placeholder="fecha de inicio" name="fecha de inicio" required>
                <input type="text" class="form-control" placeholder="fecha final" name="fecha final" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa-solid fa-floppy-disk"></i> Ingresar Usuario</button>
			
			</form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal Adicionar -->	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
     <script>
		var tabla =document.querySelector("#tabla")
		var datatable= new DataTable(tabla)
	 </script> 	
	
	

  </body>
</html>