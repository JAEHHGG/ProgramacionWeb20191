<?php include('../templates/header.php');

include('../phpresources/dbConection.php');



?>

<div class="container">

<?php

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['pass'])){
        $sentenciaSQL = "INSERT INTO `usuario` ( `nombre`, `apellido`, `email`, `pass`, `activo`) ";
        $sentenciaSQL = $sentenciaSQL."VALUES ( '";
        /*$sentenciaSQL += $_POST['nombre']."', '";
        $sentenciaSQL += $_POST['apellido']"', '";
        $sentenciaSQL += $_POST['email']"', '";
        $sentenciaSQL += $_POST['pass']"', 1)";*/

        echo $sentenciaSQL;
    }


?>
</div>

<?php include('../templates/footer.php'); ?>
