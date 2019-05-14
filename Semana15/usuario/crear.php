<?php include('../templates/header.php'); ?>
<div class="container">
<form class="form-group" action="resultadoCrear.php" method="post">
    <input class="form-control" type="text" name="nombre" id="nomre" placeholder="&#128100; Nombre">
    <input class="form-control" type="text" name="apellido" id="apellido" placeholder="&#128100; Apellido">
    <input class="form-control" type="email" name="email" id="email" placeholder="&#128231;  Correo">
    <input class="form-control" type="password" name="pass" id="pass" placeholder="&#128273; Contraseña">
    <input class="btn btn-primary" type="submit" value="Crear Usuario">
</form>
</div>


<?php include('../templates/footer.php'); ?>
