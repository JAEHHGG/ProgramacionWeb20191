<?php include('../templates/header.php');

include('../phpresources/dbConection.php');

?>

<div class="container">

<?php

    if (isset($_POST['nombre'])){
        echo '<br>'.$_POST['nombre'];
    }

    if (isset($_POST['apellido'])){
        echo '<br>'.$_POST['apellido'];
    }

    if (isset($_POST['email'])){
        echo '<br>'.$_POST['email'];
    }

    if (isset($_POST['pass'])){
        echo '<br>'.$_POST['pass'];
    }

?>
</div>

<?php include('../templates/footer.php'); ?>
