<?php include('../templates/header.php'); ?>

<?php

    if (isset($_POST['nombre'])){
        echo '<br>'.$_POST['nombre'];
    }

    if (isset($_POST['apellido'])){
        echo '<br>'.$_POST['apellido'];
    }

?>


<?php include('../templates/footer.php'); ?>
