<?php
require('models/mAviso.php');

$obj=new mAviso();
$data=$obj->getAvisos();
$n=1;
?>
<div class="row">
<div class="col l8 m8 s8 offset-l2 offset-m2 offset-s2">

    <div class="card-panel">
        <span class="card-title"><h4>Avisos</h4></span>
        <table class="highlight ">
            <thead>
                <tr>
                    <th data-field="#">#</th>
                    <th data-field="nombre">Titulo aviso</th>
                    <th data-field="fecha">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $n++; ?></td>
                    <td><a href="?sec=mostraraviso"><?php echo "Aviso 1" ;?></a></td>
                    <td><?php echo "2017-11-01";?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
