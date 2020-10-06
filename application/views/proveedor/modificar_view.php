<center>
    <h1>Modificar Proveedor</h1>
        <form action="" method="POST">
            <?php foreach ($mod as $fila){ ?>
            <input type="text"  name="id_proveedor" value="<?=$fila->id_proveedor?>" class="form-control" disabled>
            <input type="text"  name="nombre" value="<?=$fila->nombre?>" class="form-control">
            <input type="text"  name="apellido" value="<?=$fila->apellido?>" class="form-control">
            <input type="text"  name="telefono" value="<?=$fila->telefono?>" class="form-control">
            <input type="text"  name="direccion" value="<?=$fila->direccion?>" class="form-control">
            <input type="submit" name="submit" value="Modificar" class="btn btn-primary">
            <?php } ?>
        </form>
        <br>
        <br>
        <a href="<?=base_url("proveedor_controller/");?>">Volver</a>
</center>