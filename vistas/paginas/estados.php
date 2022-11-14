  <?php 
   $empleado = ControladorFormularios::ctr_control_estados(null, null);
   $cantidad =  ControladorFormularios::ctrActualizarProducto();

   $actualizar = new ControladorFormularios();
   $actualizar -> ctrActualizarProducto();
   

   ?>



  <table class="table table-hover">
    <thead>
      <tr>
        <th>#ID: Empleado</th>
        <th>Empleado</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Fecha</th>
        <th>Estado</th>
	<th></th>
      </tr>
    </thead>
    <tbody>

        <?php foreach ($empleado as $key => $value): ?>
    <tr  class="container">
        <td><?php echo $value["id"]; ?></td>
        <td><?php echo $value["empleado"]; ?></td>
        <td><?php echo $value["producto"]; ?></td>
        <td><?php echo $value["cantidad"]; ?></td>
	<td>	
	
	<?php if($value["estado"]==0){echo "";}
	if($value["estado"]==1){?>
	<a href="index.php?pagina=devolver&id=<?php echo $value["id"]; ?>" type="submit" class="btn btn-success" value="submit">Cuando se devuelve?</a>	
	<?php }
	if($value["estado"]==2){echo $value["fecha"];} ?> 
	</td>

        <td><?php if($value["estado"]==0){
	echo "No se devuelve";
	}if($value["estado"]==1){
	echo "Selecciona fecha de devolucion";
	}if($value["estado"]==2){
	echo "pendiente";
	}?></td>
	<td><form method="post"><?php if($value["estado"]==2){?>
	<button type="submit" class="btn btn-primary mb-2" value="submit">Entregar</button> <?php }else{echo "";}?>
	<input type="hidden"  value="<?php echo $valor; ?>"name="idpro">
	<input type="hidden" name="entregar" value="3">	  
	<?php endforeach ?>
	    </tbody>
  </table>
</form> 
	




