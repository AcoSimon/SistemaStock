
<?php 
if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];

	$productos = ControladorFormularios::mdlSeleccionarProductos2($item, $valor);
		
	$empleado = ControladorFormularios::ctr_empleado();
}


 ?>

<form method="post">
<div class="container">
  <h2><?php echo $productos["nombre"]; ?></h2>            
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>#ID: Producto</th>
        <th>Producto</th>
        <th>¿Que Empleado esta solicitando?</th>
        <th>Cantidad</th>
        <th>Devolver</th>
        <th>Fecha</th>
        <th>Enviar</th>
      </tr>
    </thead>
    <tbody>
    	<td><?php echo $productos["id"]; ?></td>
    	<td><?php echo $productos["nombre"]; ?></td>
    	<form class="form-inline container"  method="post"><div class="col">
    	<td><input type="varchar" class="form-control mb-2 mr-sm-2" placeholder="Tu Nombre" name="nombre_empleado"></td>
    	<td>
		  <label for="cantidad" class="mr-sm-2"></label>
		  <input type="number" min="1" step="1" class="form-control mb-2 mr-sm-2" placeholder="Cantidad del Producto" id="cantidad" name="actualizar_cantidad" max="<?php echo  $productos["cantidad"]; ?>" min="0">

      <input type="hidden" name="cantidad_actual" value="<?php echo $productos["cantidad"];?>">
      <input type="hidden" name="idProducto" value="<?php echo $productos["id"];?>">
      <input type="hidden" name="producto" value="<?php echo $productos["nombre"];?>">


		  </div></td>
    	<td><div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input, text-center" name="devolver" value=1></label>
</div></td>
    	<td><?php echo $productos["fecha"]; ?></td>
    	<td><button type="submit" class="btn btn-primary mb-2" value="submit">Solicitar</button></td>
      
      
    </tbody>
  </table>
</form>

<?php 

      $añadir = ControladorFormularios::ctrActualizarProducto();
      
      if ($añadir=="ok") {
      echo '<script>setTimeout(function(){window.location="index.php?pagina=inicio";},500);</script>';
      }

   ?>




