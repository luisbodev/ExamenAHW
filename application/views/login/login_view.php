<center>
    <br>
    <br>
    <h2>Ingresar Sesión</h2>
    <br>
    <div class="container"> 
            <?php
                if($this->session->flashdata('incorrecto'))
                    echo "<div class='alert alert-danger' role='alert'>".$this->session->flashdata('incorrecto')."</div>";
            ?>
        <form action="" method="POST">   
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2 border border-primary rounded">
                            <label for="username"></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                            <br>
                            <input  type="submit" value="Ingresar" class="btn btn-primary">
                            <br>
                            <br>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>
</center>