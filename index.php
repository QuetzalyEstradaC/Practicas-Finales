<?php
if isset ($_POST['btn']);{
    $Numero1=$_POST['caja1'];
    $Numero2=$_POST['caja2'];
    $Numero1=$_porseInt['numero1'];
    $Numero2=$_porseInt['numero2'];
    $Resultado=$Numero1+$Numero2;
    $Valor=$Resultado;
    echo $valor;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 | incluides con PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js+"></script>
</head>
<body>


    <!--navbar-->
    <?php include "include/navbar.php";?>
    <!--terminanavbar-->
    <!--offcanvas -->
    <?php include "include/menu.php"; ?>
    <!--  terminaoffcanvas -->
    <script src="js/bootstrap.min.js"></script>

    <div class="col-lg-12">
    <div class="row">
    <h1 class="text-center">Suma</h1>
    </div>

    <div class="row">
    <form action="'<?php echo $server [PHP_SELF];?>" method="Post";>
    <input type="text" name="caja1" required>
    <input type="text" name="caja2" required>
    <input type="text" name="Resultado" required>
    <input type="submit" name="btn" value="calcular" >;

</form>
</div>
</body>
</html>