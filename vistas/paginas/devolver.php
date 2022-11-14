
<?php 
if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];



}
 ?>


<div class="container">
  <h2><?php echo $productos["nombre"]; ?></h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Fecha de devolucion</th>
      </tr>
    </thead>
    <tbody>
		
       	<form class="form-inline container"  method="post"><div class="col">
    	<td><input type="date" class="form-control mb-2 mr-sm-2" name="fecha"></td>
<input type="hidden"  value="<?php echo $valor; ?>"name="idpro">
	<input type="hidden" name="Estado2" value="2">
    	<td><button type="submit" class="btn btn-primary mb-2" value="submit">Enviar</button></td>
    </tbody>
  </table>

     </form>
<?php
  $actualizar = ControladorFormularios::ctrActualizarFecha();
  if($actualizar == "ok"){
	$Estado2 = ControladorFormularios::ctrEstado2();
    echo '<script>
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>';
    echo '<div class="alert alert-success">Exito!</div> <script>setTimeout(function(){window.location="index.php?pag=inicio";},1000);</script>';
  }
  ?>




