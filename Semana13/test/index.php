<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Esta es mi app para cookies</title>
    <link rel="stylesheet" href="../estilos/main.css">
</head>
<body>

   <?php
        if (isset($_COOKIE['test'])){
            echo '<p>Hay Cookie</p>';
            setcookie('test', '', time() - 3600);
        }else {
            echo '<p>No hay Cookie</p>';
            setcookie('test', 'mi asombrosa cookie' );
        }
    ?>


</body>
</html>
