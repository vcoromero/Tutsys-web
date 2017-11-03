<?php

require('models/mMenu.php');
$obj= new Menus();
$data=$obj->getMenus($_SESSION['matriculaUsuario']);

?>

</ul>
    <ul id="dropdownNav" class="dropdown-content">
    <li><a href="?sec=misdatos">Mis datos</a></li>
    <li class="divider"></li>
    <li><a href="salir.php">Cerrar sesión</a></li>
</ul>

</ul>
    <ul id="dropdownSideNav" class="dropdown-content">
    <li><a href="?sec=misdatos">Mis datos</a></li>
    <li class="divider"></li>
    <li><a href="salir.php">Cerrar sesión</a></li>
</ul>

<nav>
    <div class="nav-wrapper green">
      <a href="?sec=principal" class="brand-logo">TUTSYS</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <?php foreach ($data as $row):?>
        <li><a href="?sec=<?php echo $row['rutaOpcion']?>"><?php echo($row['nombreOpcion'])?></a></li>
        <?php endforeach; ?>
        <li><a class="dropdown-button" href="#!" data-activates="dropdownNav"> <?php echo $_SESSION['tipoUsuario']." / ".$_SESSION['nombreUsuario']?> <i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <?php foreach ($data as $row):?>
        <li><a href="?sec=<?php echo $row['rutaOpcion']?>"><?php echo($row['nombreOpcion'])?></a></li>
        <?php endforeach; ?>
        <li class="divider"></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdownSideNav"> <?php echo $_SESSION['nombreUsuario']?> <i class="material-icons right">arrow_drop_down</i></a></li>
    </div>
</nav>