<?php

require_once('models/mMisDatos.php');

$obj=new mMisDatos();
$data=$obj->getDatos($_SESSION['idPersona'],$_SESSION['idTipoUsuario']);

?>
<div class="row">
    <div class="card orange lighten-3 hoverable">
        <div class="card-content black-text">
            <span class="card-title">Mis datos</span>
            <?php foreach($data as $row): ?>
            <label class="black-text">Nombre</label>
            <p><?php echo $row['nombre']." ".$row['appaterno']." ".$row['apmaterno'];?></p>
            <label class="black-text">Correo personal</label>
            <p><?php echo $row['correoPersonal'];?></p>
            <label class="black-text">Correo institucional</label>
            <p><?php echo $row['correoInstitucional'];?></p>
            <label class="black-text">Teléfono</label>
            <p><?php echo $row['telefono'];?></p>
            <label class="black-text">Sexo</label>
            <p><?php echo $row['sexo'];?></p>
            <label class="black-text">Fecha alta</label>
            <p><?php echo $row['fechaAlta'];?></p>
            <label class="black-text">Carrera</label>
            <p><?php echo $row['carrera'];?></p>
            <?php endforeach; ?>
        </div>
        <div class="card-action">
            <a class="black-text" href="#">Editar</a>
        </div>
    </div>
</div>