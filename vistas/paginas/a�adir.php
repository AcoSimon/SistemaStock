
<form class="container">
  <form class="form-inline" action="/action_page.php">

  <label for="nombre" class="mr-sm-2">Nombre del producto:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Nombre del Producto" id="nombre" name="registro_producto">

  <label for="cantidad" class="mr-sm-2">Cantidad:</label>
  <input type="number" min="1" step="1" class="form-control mb-2 mr-sm-2" placeholder="Cantidad del Producto" id="cantidad" name="registro_cantidad">

  <button type="submit" class="btn btn-primary mb-2">Añadir</button>

    <?php 

      $añadir = ControladorFormularios::ctr_añadir();
      echo $añadir;
   ?>


</form>
</form>