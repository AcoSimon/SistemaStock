<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>


	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<div class="container">
  <a class="navbar-brand" href="index.php?pagina=inicio">Sistema de Inventario</a>
  
    <ul class="navbar-nav" style="margin-left: 60%;">

      <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Añadir producto</button>

<a href="index.php?pagina=estados"><button style="margin-left: 50%;" type="button" class="btn btn-secondary">Estados</button></a>


    </ul>
  </div>
</nav>
<br>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-inline container"  method="post">
<div class="row">
	<div class="col">
  <label for="nombre" class="mr-sm-2">Nombre del producto:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Nombre del Producto" id="nombre" name="registro_producto">
  </div>
<div class="col">
  <label for="cantidad" class="mr-sm-2">Cantidad:</label>
  <input type="number" min="1" step="1" class="form-control mb-2 mr-sm-2" placeholder="Cantidad del Producto" id="cantidad" name="registro_cantidad">
  </div>
</div>
  
  <?php 

      $añadir = ControladorFormularios::ctr_añadir();

   ?>



  <button type="submit" class="btn btn-primary mb-2">Añadir</button>

</form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<br>

	<?php  
	
	if(isset($_GET["pagina"])){

		if($_GET["pagina"] == "inicio" ||
	       $_GET["pagina"] == "solicitud" ||
        $_GET["pagina"] == "estados" ||
	$_GET["pagina"] == "devolver"){

			include "paginas/".$_GET["pagina"].".php";
	}else{
		include "paginas/Error.php";
	}
	}else{
		include "paginas/inicio.php";
	}

	?>
</body>

<?php 
        $actualizar = ControladorFormularios::ctrActualizarProducto();
?>
</html>