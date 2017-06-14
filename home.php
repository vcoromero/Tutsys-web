<?php include('auth.php');?>

<!DOCTYPE html>
<html lang="es">

<?php include('includes/head.php'); ?>

<body class="jumbotron">
    <div class="container-fluid">
        <?php include('includes/menu.php'); ?>
        
        <div class="well well-lg">
            <div class="row">
                    <?php 

                    if(isset($_GET['sec'])){
                        $view=$_GET['sec'];
                    }else{
                        $view='principal';
                    }
                    include('views/'.$view.'.php');
                    ?>
                <?php include('includes/footer.php'); ?>
            </div>
        </div>
    </div>
</body>
</html>