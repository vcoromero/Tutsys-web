<?php include('auth.php'); ?>

<!DOCTYPE html>
<html lang="es">

<?php include('includes/head.php'); ?>

<body class="grey lighten-2">
    <?php include('includes/nav.php'); ?>
    <div>
        <div class="container">
            <div class="col l12 m">
                <?php 
                if(isset($_GET['sec']))
                {
                    $view=$_GET['sec'];
                }
                else
                {
                    $view='principal';
                }
                include('views/'.$_SESSION['idTipoUsuario'].'/'.$view.'.php');
                ?>

            </div>
        </div>
    <?php include('includes/footer.php'); ?>
    </div>
</body>
</html>