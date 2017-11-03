<?php
require('models/mReporte.php');

$obj=new mReporte();
$data=$obj->getReportes();
$n=1;
?>
<div class="row">
<div class="col l8 m8 s8 offset-l2 offset-m2 offset-s2">

    <div class="card-panel">
        <span class="card-title"><h4>Reportes</h4></span>
        <table class="highlight ">
            <thead>
                <tr>
                    <th data-field="#">#</th>
                    <th data-field="nombre">Tipo de reporte</th>
                    <th data-field="fecha">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $row): ?> 
                <tr>
                    <td><?php echo $n++; ?></td>
                    <td><a href="?sec=datosTutorado&id=<?php echo $row['idPersona'] ?>"><?php echo $row['tipoReporte'];?></a></td>
                    <td><a href="?sec=datosTutorado&id=<?php echo $row['idPersona'] ?>"><?php echo $row['fechaReporte'];?></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="card-action center-align">
            <a class="btn green" href="#">Nuevo reporte</a>
        </div>
    </div>
</div>
</div>
