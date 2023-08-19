<section class="categorias" id="ponente">
    <div class="categorias_div">
        <div class="title-categorias">
            <h1>Categoria:Ponente</h1>
            <div class="descargar-formato">
                <p>Recuerda: Debes descargar el formato necesario para esta actividad</p>
                <button id="descargar" onclick="descargarArchivoPonente()">Descargar <img class="icon-descarga" src="./img/downloads.png" alt=""></button>
            </div>
        </div>    
        <div class="formulario">
            <form action="./config/registrarPonentes.php" method="POST" class="form" enctype="multipart/form-data">
                    <div class="coolinput">
                        <label for="eje" class="text">Eje tematico:</label>
                        <input type="text" placeholder="..." name="ejetematico" class="input" id="eje">
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
                            <input type="text" placeholder="Nombre de la titulada.." name="titulada" class="input" id="titulada" >
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
                    <div class="coolinput">
                        <span class="form-title">Se debe cargar documento en formato Word con la información del proyecto y 
                            documento en power point o pdf con la presentación del proyecto. (Limitar el tamaño
                            del documento a 20 Mb x documento ).</span>
                            <br>
                            <span class="form-title">Los documentos debe ir nombrados por el titulo del proyecto.</span>
                        <label for="file-input" class="drop-container">
                            <span class="drop-title">Selecciona tus archivos PDF o Power Point aqui.</span>
                            <input type="file" name="archivo_1" accept=".pdf" id="file-input">
                            <span class="drop-title">Selecciona tus archivos Word aqui.</span>
                            <input type="file" name="archivo_2" accept=".docx" id="file-input">
                        </label>
                    </div>
                    <div class="coolinput">
                        <input type="submit" value="Registrarme" class="button-registro">
                    </div>
            </form>
        </div>
    </div>
</section>
<!-- FORMULARIO PARA LA CATEGORIA POSTER -->
<section class="categorias" id="poster">
    <div class="categorias_div">
        <div class="title-categorias">
            <h1>Categoria:Poster</h1>
            <div class="descargar-formato">
                <p>Recuerda: Debes descargar el formato necesario para esta actividad</p>
                <button id="descargar" onclick="descargarArchivoPoster()">Descargar <img class="icon-descarga" src="./img/downloads.png" alt=""></button>
            </div>
        </div>    
        <div class="formulario">
            <form action="./config/registrarPoster.php" method="POST" class="form" enctype="multipart/form-data">
                    <div class="coolinput">
                        <label for="nombreInstitucion" class="text">Institucion:</label>
                        <input type="text" placeholder="Nombre de la Institucion" name="nombreInstitucion" class="input" id="nombreInstitucion">
                    </div>
                    <div class="coolinput">
                        <label for="participantes" class="text">Participantes:</label>
                        <input type="text" min="1" max="3" placeholder="Ingrese el número de participantes (máximo 3)" class="input" id="participantes">
                    </div>
                    <div id="contenedorParticipantes"></div>
                    <div class="coolinput">
                        <label for="tituloProyecto" class="text">Titulo del proyecto:</label>
                        <input type="text" placeholder="..." name="tituloProyecto" class="input" id="tituloProyecto">
                    </div>
                    <div class="coolinput">
                        <span class="form-title">Se debe cargar la presentación o diseño del poster en pdf. (Tamaño máximo por
                            documento 20Mb)</span>
                        <label for="file-input" class="drop-container">
                            <span class="drop-title">Selecciona tus archivos aqui.</span>
                            <input type="file" accept=".pdf" id="file-input" name="archivo">
                        </label>
                    </div>
                    <div class="coolinput">
                        <input type="submit" value="Registarme" class="button-registro">
                    </div>
            </form>
        </div>
    </div>
</section>