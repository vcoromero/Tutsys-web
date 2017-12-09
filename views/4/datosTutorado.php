<?php

require_once('models/mMisDatos.php');

$obj=new mMisDatos();
$data=$obj->getDatos($_GET['id'],'5');

?>
<div class="row">
    <div class="card-panel hoverable">
    <span class="card-title"><h4>Datos tutorado</h4></span>
    <div class="card-content">
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
            <label class="black-text">Semestre</label>
            <p><?php echo $row['semestre'];?></p>
            <?php endforeach; ?>
        </div>
    </div>

</div>