<?php include('auth.php');?>
<!DOCTYPE html>
<html lang="es">
<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/navAdmin.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col m9 s12 offset-m3">
                <?php 
                if(isset($_GET['sec']))
                {
                    $view=$_GET['sec'];
                }
                else
                {
                    $view='principal';
                }
                include('views/administrador/'.$view.'.php');
                ?>
            </div>
        </div>
    <?php include('includes/footer.php'); ?>
    </div>
</body>
</html>