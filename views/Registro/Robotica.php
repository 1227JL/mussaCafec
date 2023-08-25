
<?php
    require_once '../../includes/templates/header.php';
    require_once '../../includes/config/utils.php';
?>
<?php if(isset($_SESSION['registrado'] )): ?>
<div class='alert-success'>
    <?= $_SESSION['registrado'] ; ?>
</div>
<?php endif; ?>
<main class="formularios">
<div class="alert-error">
    <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'existeRegistro'):"" ?>
</div>
<section class="categorias" id="Robotica">
    <div class="categorias_div">
        <div class="title-categorias">
            <h1 class="heading">Robotica</h1>
        </div>    
        <div class="formulario">
            <form action="../../includes/config/registrarRobotica.php" method="POST" class="form" id="form-robotica">
                <fieldset>
                    <legend>Información de Participación</legend>
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
                        <label for="tituloR" class="text">Nombre de Equipo:</label>
                        <input type="text" placeholder="..." class="input" id="tituloR" name="tituloR">
                    </div>
                    <div class="coolinput">
                        <label for="representante" class="text">Representante del equipo:</label>
                        <input type="text" placeholder="Nombre completo del representante..." class="input" id="representante" name="representante">
                    </div>
                    <div class="coolinput">
                        <label for="Email" class="text">Email:</label>
                        <input type="email" placeholder="Email del representante..." name="correo" class="input" id="Email">
                    </div>
                    <div class="coolinput">
                        <label for="contacto" class="text">Contacto:</label>
                        <input type="text" placeholder="Contacto del representante..." name="contacto" class="input" id="contacto">
                    </div>
                    <div class="coolinput terminos">
                        <input type="checkbox"  name="confirmacion" class="input" id="confirmacion">
                    </div>
                </fieldset>
                <input class="boton-verde-block" type="submit" value="Registrarme" class="button-registro">
            </form>
        </div>
    </div>
    <section class="concursos-cards">
        <h1 class="heading">Participa en nuestros concursos</h1>
        <div class="cards">
            <div class="card">
                <h1>Academico</h1>
                <img src="/build/img/academico2.jpg" alt="Img academico">
                <a href="/views/Registro/poster-ponentes.php" class="boton-verde-block">Inscribete</a>
            </div>
            <div class="card">
                <h1>Feria Empresarial</h1>
                <img src="/build/img/feria2.jpg" alt="Img Feria">
                <a href="/views/Registro/feriaEmpresarial.php" class="boton-verde-block">Inscribete</a>
            </div>
        </div>
    </section>
</main>
<?php BorrarErrores(); ?>
<script src="../../src/js/form_robotica.js"></script>