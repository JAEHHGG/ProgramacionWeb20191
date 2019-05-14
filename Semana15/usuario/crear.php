<?php include('../templates/header.php'); ?>
<div class="container">
<form class="form-group" action="resultadoCrear.php" method="post">
    <input class="form-control" type="text" name="nombre" id="nomre">
    <input class="form-control" type="text" name="apellido" id="apellido">
    <input class="form-control" type="email" name="email" id="email">
    <input class="form-control" type="password" name="pass" id="pass">
    <input class="btn btn-primary" type="submit" value="Crear Usuario">
</form>
</div>


<?php include('../templates/footer.php'); ?>
