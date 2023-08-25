
<?php
    require_once '../../includes/templates/header.php';
    require_once '../../includes/config/utils.php';
?>
<?php if(isset($_SESSION['registrado'])): ?>
    <script>
        swal({
            title: "¡Registro Exitoso!",
            text: "¡Felicitaciones!, Tu registro se ha completado con éxito.",
            icon: "success"
        });
    </script>
<?php endif; ?>
<main class="formularios">
<div class="alert-error">
    <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'existeRegistro'):"" ?>
</div>
<section class="categorias seccion" id="Robotica">
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
    <section class="flex-wrap">
        <h1 class="heading">Otros Concursos</h1>
        <div class="cards">
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-1">
                        <h1>Academico</h1>
                        <a href="/views/Registro/poster-ponentes.php">Inscribete</a>
                    </div>
                </div>
            </div>
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-2">
                        <h1>Feria Empresarial</h1>
                        <a href="/views/Registro/feriaEmpresarial.php">Inscribete</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php BorrarErrores(); ?>
<script src="../../src/js/form_robotica.js"></script>