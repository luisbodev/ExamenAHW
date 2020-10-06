<center>
<div class="container">
    <h1>Modificar Artículo</h1>
        <form action="" method="POST" class="col-md-6">
            <?php foreach ($mod as $fila){ ?>
            <label for="">ID Proveedor</label>            
            <input type="text"  name="id_proveedor" value="<?=$fila->id_proveedor?>" class="form-control" disabled>
            <br>
            <label for="">Nombre</label>
            <input type="text"  name="nombre" value="<?=$fila->nombre?>" class="form-control">
            <br>
            <label for="">Precio</label>
            <input type="text"  name="precio" value="<?=$fila->precio?>" class="form-control">
            <br>
            <label for="">Tipo</label>
            <input type="text"  name="tipo" value="<?=$fila->tipo?>" class="form-control">
            <br>
            <label for="">ID Proveedor</label>
            <input type="text"  name="id_proveedor" value="<?=$fila->id_proveedor?>" class="form-control">
            <br>
            <input type="submit" name="submit" value="Modificar" class="btn btn-primary">
            <?php } ?>
        </form>
        <br>
        <br>
</div>
        <a href="<?=base_url("index.php/articulo_controller/");?>">Volver</a>
</center>