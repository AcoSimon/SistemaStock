  <?php 
   $productos = ControladorFormularios::mdlSeleccionarProductos(null,null);
  

   $actualizar = new ControladorFormularios();
   $actualizar -> ctrActualizarProducto();

   ?>



  <table class="table table-hover">
    <thead>
      <tr>
        <th>#ID: Producto</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Fecha</th>
        <th>Solicitud</th>
      </tr>
    </thead>
    <tbody>

        <?php foreach ($productos as $key => $value): ?>

    <tr  class="container">
        <td><?php echo $value["id"]; ?></td>
        <td><?php echo $value["nombre"]; ?></td>
        <td><?php echo $value["cantidad"]; ?></td>
        <td><?php echo $value["fecha"]; ?></td>
        <td>
            <div class="container">
              <?php if($value["cantidad"]>=1){?>
                <a href="index.php?pagina=solicitud&id=<?php echo $value["id"]; ?>"  class="btn btn-success">Solicitar</a>
                <?php }else{?>
                   <a href="#" disabled class="btn btn-danger">Sin stock</a>
                   <?php } ?>
            </div>
          </td>
        <?php endforeach ?>



    </tbody>
  </table>