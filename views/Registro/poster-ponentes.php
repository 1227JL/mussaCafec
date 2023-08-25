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
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'tamaño'):"" ?>
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'formato-docx'):"" ?>
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'error-archivo'):"" ?>
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'formato-pdf'):"" ?>
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'numerico'):"" ?>
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'existeRegistro'):"" ?>
    </div>
    <div class="select__form seccion">
        <h1 class="heading">Seleccione su categoría</h1>
        <div class="select__categorias">
            <div class="categoria">
                <input type="radio" name="categoria" id="checkbox-ponente" checked>
                <label for="checkbox-ponente">Ponente</label>
            </div>
            <div class="categoria">
                <input type="radio" name="categoria" id="checkbox-poster" >
                <label for="checkbox-poster">Poster</label>
            </div>
        </div>    
    </div>
    <section class="categorias seccion" id="ponente">
        <div class="categoria">
            <div class="title-categorias">
                <h1 class='heading'>Ponente</h1>
                <div class="descargar-formato">
                    <p><span>Recuerda:</span> Debes descargar el formato necesario para esta actividad</p>
                    <button class="boton-amarillo-block" id="descargar" onclick="descargarArchivoPonente()">Descargar<img class="icon-descarga" src="/build/assets/download.png" alt="icon download"></button>
                </div>
            </div>    
            <div class="formulario">
                <form action="../../includes/config/registrarPonentes.php" method="POST" class="form" id="form-ponente" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Información de Participación</legend>
                        <div class="coolinput">
                            <label for="ejetematico" class="text">Eje tematico:</label>
                            <select id="ejetematico" class="select" onchange="mostrar()" name="ejetematico">
                                <option value="">Seleccione una opcion</option>
                                <option value="Empresarial">Empresarial</option>
                                <option value="Agroindustrial">Agroindustrial</option>
                                <option value="Energías renovables">Energías renovables</option>
                                <option value="Protección al medio ambiente">Protección al medio ambiente</option>
                                <option value="Arquitectura y Construcciones Sostenibles">Arquitectura y Construcciones Sostenibles</option>
                            </select>
                        </div>
                        <div class="coolinput">
                            <label for="Institucion" class="text">Institución de participación:</label>
                            <select id="Institucion" class="select" onchange="mostrar()" name="tipoInstitucion">
                                <option value="">Seleccione una opcion</option>
                                <option value="SENA">SENA</option>
                                <option value="Externa">Externa</option>
                            </select>
                        </div>
                        <div class="mostrar-input-externa">
                            <div class="coolinput">
                                <label for="externa" class="text">Define tu Insitucion:</label>
                                <input type="text" placeholder="Nombre de la institucion..." name="externa" class="input" id="externa">
                            </div>
                        </div>
                        <div class="mostrar-input-sena">
                            <div class="coolinput">
                                <label for="titulada" class="text">Titulada:</label>
                                <input type="text" placeholder="Nombre de la titulada.." name="titulada" class="input" id="titulada">
                            </div>
    
                            <div class="coolinput">
                                <label for="ficha" class="text">Ficha:</label>
                                <input type="text" placeholder="# de ficha..." name="ficha" class="input" id="ficha" pattern="[0-9]{4,20}">
                            </div>
                        </div>
                        <div class="coolinput">
                            <label for="Ponentes" class="text">Numero de ponentes:</label>
                            <select id="Ponentes" name="numeroPonentes" class="select" onchange="crearCampos()">
                                <option value="">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="coolinput" id="contenedorPonentes"></div>
                        <div class="coolinput">
                            <label for="titulo" class="text">Titulo del Proyecto:</label>
                            <input type="text" placeholder="..." name="titulo" class="input" id="titulo">
                        </div>
                        <div class="coolinput">
                            <label for="Institucion" class="text">Tipo de proyecto:</label>
                            <select name="tipoProyecto" id="Institucion" class="select">
                                <option value="">Seleccione una opcion</option>
                                <option value="Formativo">Formativo</option>
                                <option value="Productivo">Productivo</option>
                                <option value="SENNOVA">SENNOVA</option>
                                <option value="Externo">Externo</option>
                            </select>
                        </div>
                        <div class="coolinput files">
                            <span class="form-title">Se debe cargar documento en formato Word con la información del proyecto y 
                                documento en power point o pdf con la presentación del proyecto. (Limitar el tamaño
                                del documento a 20 Mb x documento ).</span>
                                <span class="form-title">Los documentos debe ir nombrados por el titulo del proyecto.</span>
                            <label for="file-input" class="drop-container">
                                <span class="drop-title">Selecciona tus archivos PDF o Power Point aqui.</span>
                                <input type="file" name="archivo_1" accept=".pdf,.pptx" id="file-input">
                                <span class="drop-title">Selecciona tus archivos Word aqui.</span>
                                <input type="file" name="archivo_2" accept=".docx" id="file-input">
                            </label>
                        </div>
                    </fieldset>
                    <input class="boton-verde-block" type="submit" value="Registrarme" class="button-registro">
                </form>
            </div>
        </div>
    </section>
    <!-- FORMULARIO PARA LA CATEGORIA POSTER -->
    <section class="categorias seccion" id="poster">
        <div class="categoria">
            <div class="title-categorias">
                <h1 class='heading'>Poster</h1>
                <div class="descargar-formato">
                    <p>Recuerda: Debes descargar el formato necesario para esta actividad</p>
                    <button class="boton-amarillo-block" id="descargar" onclick="descargarArchivoPoster()">Descargar <img class="icon-descarga" src="/build/assets/download.png" alt=""></button>
                </div>
            </div>    
            <div class="formulario">
                <form action="../../includes/config/registrarPoster.php" method="POST" id="form-poster" class="form" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Informacion de Participación</legend>
                        <div class="coolinput">
                            <label for="nombreInstitucion" class="text">Institucion:</label>
                            <input type="text" placeholder="Nombre de la Institucion" name="nombreInstitucion" class="input" id="nombreInstitucion">
                        </div>
                        <div class="coolinput">
                            <label for="participantes" class="text">Participantes:</label>
                            <select id="participantes" name="participantes" class="select" onchange="crearCampos()">
                                <option value="">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div id="contenedorParticipantes"></div>
                        <div class="coolinput">
                            <label for="tituloProyecto" class="text">Titulo del proyecto:</label>
                            <input type="text" placeholder="..." name="tituloProyecto" class="input" id="tituloProyecto">
                        </div>
                        <div class="coolinput files">
                            <span class="form-title">Se debe cargar la presentación o diseño del poster en pdf. (Tamaño máximo por
                                documento 20Mb)</span>
                            <label for="file-input" class="drop-container">
                                <span class="drop-title">Selecciona tus archivos aqui.</span>
                                <input type="file" accept=".pdf" id="file-input" name="archivo">
                            </label>
                        </div>
                    </fieldset>
                    <input class="boton-verde-block" type="submit" value="Registarme" class="button-registro">
                </form>
            </div>
        </div>
    </section>
    <section class="flex-wrap">
        <h1 class="heading">Otros Concursos</h1>
        <div class="cards">
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
<script src="../../src/js/form_academico.js"></script>
