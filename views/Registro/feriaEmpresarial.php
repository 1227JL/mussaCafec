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
    <section class="categorias seccion" id="FeriaEmpresarial">
        <div class="categoria">
            <div class="title-categorias">
                <h1 class="heading">Feria Empresarial</h1>
                <div class="descargar-formato">
                    <p>Recuerda descargar el formato necesario para esta actividad</p>
                    <button class="boton-amarillo-block" id="descargar" onclick="descargarArchivoFeriaEmpresarial()">Descargar <img class="icon-descarga" src="/build/assets/download.png" alt=""></button>
                </div>
            </div>    
            <div class="formulario">
                <form action="../../includes/config/registrarFeria.php" method="POST" id="form-feria" class="form" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Información de Participación</legend>
                        <div class="coolinput">
                            <label for="nombreInstitucionFeria" class="text">Institucion:</label>
                            <input type="text" placeholder="Nombre de la Institucion" name="nombreInstitucion" class="input" id="nombreInstitucionFeria">
                        </div>
                        <div class="coolinput">
                            <label for="N-participantes" class="text">N° de participantes:</label>
                            <input type="text" placeholder="Ingrese el número de participantes" min="1" max="10" class="input" id="N-participantes" name="participantes">
                        </div>
                        <div class="coolinput">
                            <label for="tituloProyectoFeria" class="text">Titulo del proyecto:</label>
                            <input type="text" placeholder="..." name="tituloProyecto" class="input" id="tituloProyectoFeria">
                        </div>
                        <div class="coolinput">
                            <span class="form-title">Requerimientos para el Stand (Aclarar que máximo 2 personas por proyecto, propuesto
                                        o emprendimiento)</span>
                        </div>
                    </fieldset>
                    <input class="boton-verde-block" type="submit" value="Registrarme" class="button-registro">
                </form>
            </div>
        </div>
    </section>
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
<script src="../../src/js/form_feria.js"></script>
