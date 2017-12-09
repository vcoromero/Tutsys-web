<?php
require('models/mDepartamentoApoyo.php');

$obj=new mDepartamentoApoyo();
$data=$obj->getDepartamentosApoyo();
$n=1;
?>
<div class="row">
    <div class="col l8 m8 s8 offset-l2 offset-m2 offset-s2">
        <div class="card-panel">
            <span class="card-title"><h4>Departamentos de apoyo</h4></span>
            <table class="highlight ">
                <thead>
                    <tr>
                        <th data-field="#">#</th>
                        <th data-field="nombre">Nombre</th>
                        <th data-field="acciones">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $row): ?> 
                    <tr>
                        <td><?php echo $n++; ?></td>
                        <td><a href="?sec=datosTutorado&id=<?php echo $row['idPersona'] ?>"><?php echo $row['nombre'];?></a></td>
                        <td>
                            <a class="waves-effect waves-light btn green" href="?sec=citarDepartamentoApoyo&id=<?php echo $row["idPersona"]; ?>"><i class="tiny material-icons">collections_bookmark</i></a>  
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>