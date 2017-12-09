<?php
?>

<div class="row card white">
        <span><h4>Nuevo aviso</h4></span>
        <form class="col l12" action="" method="POST" role="form">

        <div class="input-field col s12 l12">
            <input type="text" id="titulo" class="validate">
            <label for="titulo">Titulo</label>
        </div>
        <div class="input-field col s12 l12">
            <textarea id="aviso" class="materialize-textarea"></textarea>
            <label for="aviso">Aviso</label>
        </div>
        <div>
            <a class="btn green" href="?sec=nuevoaviso">Enviar</a>
        </div>
        </form>
</div>