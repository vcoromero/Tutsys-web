<?php
 
 if(isset($_POST['matricula']) && isset($_POST['contrasena'])){

 include 'models/mAcceso.php';
 $obj=  new mAcceso();
 $data=$obj->validarLogin($_POST['matricula'],$_POST['contrasena']); 
 }
?>
<!DOCTYPE html>
<html lang="es">
    <?php include("includes/head.php") ?>
    <body class="jumbotron">
        <div class="container">
            <div class="row">
                <div  class="col m6 s10 offset-m3 offset-s1">
                    <div class="card-panel white">
                        <div class=" row center-align">
                            <img style="max-width:230px;margin:auto;" src="assets/img/tutsys.png" class="responsive-img">
                        </div>
                        <form id="formulario-login" method="POST">
                        <div class="row">
                            <div class="input-field">
                                <input name="matricula" id="matricula" type="text" class="validate">
                                <label for="matricula">Matricula</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field">
                                <input name="contrasena" id="contrasena" type="password" class="validate">
                                <label for="contrasena">Contraseña</label>
                            </div>
                        </div>
                        <div class="row center-align">
                            <button class="btn waves-effect waves-light green" type="submit" name="btnEnviar">Entrar<i class="material-icons right">send</i></button>
                        </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
        <?php include("includes/footer.php") ?>
    </body>
    </html>