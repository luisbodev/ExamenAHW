    <center>
        <h1>Proveedores</h1>
        <div class="container">
            <?php
            //Si existen las sesiones flasdata que se muestren
                if($this->session->flashdata('correcto'))
                    echo "<div class='alert alert-primary' role='alert'>".$this->session->flashdata('correcto')."</div>";
                
                if($this->session->flashdata('incorrecto'))
                    echo "<div class='alert alert-danger' role='alert'>".$this->session->flashdata('incorrecto')."</div>";
            ?>
        </div>
        <div class="container">
            <div class="col-md-6">
                <form action="<?=base_url("index.php/proveedor_controller/buscar");?>" method="GET">
                    <label for="">Buscar</label>
                    <input type="text"  name="keyword" class="form-control"><br>
                    <input type="submit" name="submit" value="Buscar" class="btn btn-primary">
                </form>
            </div>

        </div>
        <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <form action="<?=base_url("index.php/proveedor_controller/add");?>" method="post">
            <td></td>
            <td>
                <input type="text"  name="nombre" class="form-control">
            </td>
            <td>
                <input type="text"  name="apellido" class="form-control">
            </td>
            <td>
                <input type="text"  name="telefono" class="form-control">
            </td>
            <td>
                <input type="text"  name="direccion" class="form-control">
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
                <?=$fila->id_proveedor;?>
            </td>
            <td>
                <?=$fila->nombre;?>
            </td>
            <td>
                <?=$fila->apellido;?>
            </td>
            <td>
                <?=$fila->telefono;?>
            </td>
            <td>
                <?=$fila->direccion;?>
            </td>
            <td>
                <a href="<?=base_url("index.php/proveedor_controller/mod/$fila->id_proveedor")?>" class="btn btn-primary">Modificar</a>
                <a href="<?=base_url("index.php/proveedor_controller/eliminar/$fila->id_proveedor")?>" class="btn btn-success">Eliminar</a>
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


