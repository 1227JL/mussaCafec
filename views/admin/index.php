<?php
    require_once '../../includes/templates/header.php';
    require_once '../../includes/config/utils.php';
?>
<?php if(isset($_SESSION['error-login'])): ?>
<div class='message-delete'>
    <?= $_SESSION['error-login'] ; ?>
</div>
<?php endif;?>

<div class="">
<form action="../../includes/config/iniciar_sesion.php" method="POST">
    <div class="coolinput">
        <label for="usuario" class="text">Usuario:</label>
        <input type="text" name="usuario" class="input" id="usuario" required>
    </div>
    <div class="coolinput">
        <label for="password" class="text">Password:</label>
        <input type="password" name="password" class="input" id="password" required>
    </div>
    <div class="coolinput">
        <input type="submit" value="Iniciar Sesion" class="button-registro">
    </div>
</form>
</div>
<?php BorrarErrores(); ?>
