<?php include('../templates/header.php');

include('../phpresources/dbConection.php');



?>

<div class="container">

<?php

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['pass'])){
        $sentenciaSQL = "INSERT INTO `usuario` ( `nombre`, `apellido`, `email`, `pass`, `activo`) ";
        $sentenciaSQL = $sentenciaSQL."VALUES ( '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['nombre']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['apellido']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['email']."', '";
        $sentenciaSQL = $sentenciaSQL."".$_POST['pass']."', 1)";


        if ($conexion->query($sentenciaSQL) === TRUE) {
            echo "Usuario creado";
        } else {
            echo "Error: " . $sentenciaSQL . "<br>" . $conexion->error;
        }

        $conexion->close();

    }


?>
</div>

<?php include('../templates/footer.php'); ?>
