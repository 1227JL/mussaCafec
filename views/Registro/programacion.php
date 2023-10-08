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
            <h1 class="heading">Maraton de Programación</h1>
        </div>    
        <div class="formulario">
            <form action="../../includes/config/registrarProgamacion.php" method="POST" class="form" id="form-programacion">
                <fieldset>
                    <legend>Información de Participación</legend>
                    <div class="coolinput">
                        <label for="categoria" class="text">Categoria de participacion:</label>
                        <select name="categoria" id="categoria" class="select">
                            <option value="" selected disabled>Seleccione una opcion</option>
                            <option value="Principiante">Principiante</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Avanzado">Avanzado</option>
                        </select>
                    </div>
                    <div class="coolinput">
                        <label for="Institucion" class="text">Institucion:</label>
                        <input type="text" placeholder="Nombre de la Institucion" name="Institucion" class="input" id="Institucion">
                    </div>
                    <div class="coolinput">
                        <label for="equipo" class="text">Nombre de Equipo:</label>
                        <input type="text" placeholder="..." class="input" id="equipo" name="equipo">
                    </div>
                    <div class="coolinput">
                        <label for="Nparticipantes" class="text">Numero de participantes:</label>
                        <select name="Nparticipantes" id="Nparticipantes" class="select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
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
                    <div class="coolinput participantes"></div>
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
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-3">
                        <h1>Torneo de Robótica</h1>
                        <a href="/views/Registro/Robotica.php">Inscribete</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php BorrarErrores(); ?>
<?php include "../../includes/templates/footer.php"; ?>
<script src="../../src/js/form_programacion.js"></script>