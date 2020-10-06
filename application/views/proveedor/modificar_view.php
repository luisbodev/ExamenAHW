<center>
<div class="container">
    <h1>Modificar Proveedor</h1>
        <form action="" method="POST" class="col-md-6">
            <?php foreach ($mod as $fila){ ?>
            <label for="">ID Proveedor</label>            
            <input type="text"  name="id_proveedor" value="<?=$fila->id_proveedor?>" class="form-control" disabled>
            <br>
            <label for="">Nombre</label>
            <input type="text"  name="nombre" value="<?=$fila->nombre?>" class="form-control">
            <br>
            <label for="">Apellido</label>
            <input type="text"  name="apellido" value="<?=$fila->apellido?>" class="form-control">
            <br>
            <label for="">Teléfono</label>
            <input type="text"  name="telefono" value="<?=$fila->telefono?>" class="form-control">
            <br>
            <label for="">Dirección</label>
            <input type="text"  name="direccion" value="<?=$fila->direccion?>" class="form-control">
            <br>
            <input type="submit" name="submit" value="Modificar" class="btn btn-primary">
            <?php } ?>
        </form>
        <br>
        <br>
</div>
        <a href="<?=base_url("proveedor_controller/");?>">Volver</a>
</center>