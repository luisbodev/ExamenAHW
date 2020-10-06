    <center>
        <h1>Artículos</h1>
        <div class="container">
            <?php
            //Si existen las sesiones flasdata que se muestren
                if($this->session->flashdata('correcto'))
                    echo "<div class='alert alert-primary' role='alert'>".$this->session->flashdata('correcto')."</div>";
                
                if($this->session->flashdata('incorrecto'))
                    echo "<div class='alert alert-danger' role='alert'>".$this->session->flashdata('incorrecto')."</div>";
            ?>
        </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Tipo</th>
      <th scope="col">ID Proveedor</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <form action="<?=base_url("index.php/articulo_controller/add");?>" method="post">
            <td></td>
            <td>
                <input type="text"  name="nombre" class="form-control">
            </td>
            <td>
                <input type="text"  name="precio" class="form-control">
            </td>
            <td>
                <input type="text"  name="tipo" class="form-control">
            </td>
            <td>
                <input type="text"  name="id_proveedor" class="form-control">
            </td>
            <td>
                <input type="submit" name="submit" value="Añadir" class="btn btn-primary">
            </td>
        </form>
    </tr>    
    <?php
    foreach($ver as $fila){
    ?>
        <tr>
            <td scope="row">
                <?=$fila->id_articulo;?>
            </td>
            <td>
                <?=$fila->nombre;?>
            </td>
            <td>
                <?=$fila->precio;?>
            </td>
            <td>
                <?=$fila->tipo;?>
            </td>
            <td>
                <?=$fila->id_proveedor;?>
            </td>
            <td>
                <a href="<?=base_url("index.php/articulo_controller/mod/$fila->id_articulo")?>" class="btn btn-primary">Modificar</a>
                <a href="<?=base_url("index.php/articulo_controller/eliminar/$fila->id_articulo")?>" class="btn btn-success">Eliminar</a>
            </td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<br>
<a href="<?=base_url("index.php/pages_controller/");?>">Volver</a>
</center>


