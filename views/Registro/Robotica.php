
<?php
    require_once '../../includes/templates/header.php';
    require_once '../../includes/config/utils.php';
?>
<?php if(isset($_SESSION['registrado'] )): ?>
<div class='message-register'>
    <?= $_SESSION['registrado'] ; ?>
</div>
<?php endif; ?>
<div class="errores-archivos">
    <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'existeRegistro'):"" ?>
</div>
<section class="categorias" id="Robotica">
    <div class="categorias_div">
        <div class="title-categorias">
            <h1>Categoria:Robotica</h1>
            <div class="descargar-formato">
                <p>Recuerda descargar el formato necesario para esta actividad</p>
                <button id="descargar" onclick="descargarArchivoRobotica()">Descargar <img class="icon-descarga" src="./img/downloads.png" alt=""></button>
            </div>
        </div>    
        <div class="formulario">
            <form action="../../includes/config/registrarRobotica.php" method="POST" class="form" id="form-robotica">
                    <div class="coolinput">
                        <label for="categoria" class="text">Categoria de participacion:</label>
                        <select name="categoria" id="categoria" class="select">
                            <option value="">Seleccione una opcion</option>
                            <option value="Robot Seguidor de línea velocista">Robot Seguidor de línea velocista</option>
                            <option value="Robot Batalla de mini sumo (autónomo)">Robot Batalla de mini sumo (autónomo)</option>
                            <option value="Robot Futbolero SENA CUP">Robot Futbolero SENA CUP</option>
                            <option value="SENABOT">SENABOT</option>
                        </select>
                    </div>
                    <div class="coolinput">
                        <label for="InstitucionRobotica" class="text">Institucion:</label>
                        <input type="text" placeholder="Nombre de la Institucion" name="InstitucionRobotica" class="input" id="InstitucionRobotica">
                    </div>
                    <div class="coolinput">
                        <label for="tituloR" class="text">Titulo de proyecto:</label>
                        <input type="text" placeholder="..." class="input" id="tituloR" name="tituloR">
                    </div>
                    <div class="coolinput">
                        <label for="Email" class="text">Email:</label>
                        <input type="email" placeholder="Ingresa un correo ..." name="correo" class="input" id="Email">
                    </div>
                    <div class="coolinput">
                        <label for="contacto" class="text">Contacto:</label>
                        <input type="text" placeholder="Define un contacto..." name="contacto" class="input" id="contacto">
                    </div>
                    <div class="coolinput">
                        <label for="confirmacion" class="text">Los participantes solo deben estar registrados en un solo proyecto:</label>
                        <input type="checkbox"  name="confirmacion" class="input" id="confirmacion">
                    </div>
                    <div class="coolinput">
                        <input type="submit" value="Registrarme" class="button-registro">
                    </div>
                    
            </form>
        </div>
    </div>
</section>
<?php BorrarErrores(); ?>
<script src="../../src/js/form_robotica.js"></script>