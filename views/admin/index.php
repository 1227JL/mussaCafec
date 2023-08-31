<?php
    require_once '../../includes/templates/header.php';
    require_once '../../includes/config/utils.php';
?>
<?php if(isset($_SESSION['error-login'])): ?>
<div class='alert-error'>
    <?= $_SESSION['error-login'] ; ?>
</div>
<?php endif;?>

<main class="contain login">
    <h1 class="heading">Panel Administrativo</h1>
    <form action="../../includes/config/iniciar_sesion.php" method="POST">
        <div class="coolinput">
            <label for="usuario" class="text">Usuario:</label>
            <input type="text" name="usuario" class="input" id="usuario" required>
        </div>
        <div class="coolinput">
            <label for="password" class="text">Password:</label>
            <input type="password" name="password" class="input" id="password" required>
        </div>
        <input class="boton-amarillo-block" type="submit" value="Iniciar Sesion" class="button-registro">
    </form>
</main>
<?php BorrarErrores(); ?>
