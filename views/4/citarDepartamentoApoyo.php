<div class="row white">
    <span><h4>Nueva cita</h4></span>
    <form class="col l12" action="" method="POST" role="form">
        <div class="input-field col s12 l6">
            <input type="text" class="datepicker" id="fecha">
            <label for="fecha">Fecha</label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" class="timepicker">
            <label for="hora">Hora</label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="motivo" class="validate">
            <label for="motivo">Motivo</label>
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="lugar" class="validate">
            <label for="lugar">Lugar</label>
        </div>
        <div class="input-field col s12">
    <select class="browser-default">
      <option value="">Elija un departamento de apoyo</option>
      <option value="1">Psicologia</option>
      <option value="2">Ciencias básicas</option>
    </select>

        </div>
        <div>
            <a class="btn green" href="?sec=nuevoaviso">Generar cita</a>
        </div>
        
    </form>
</div>