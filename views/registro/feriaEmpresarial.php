
<section class="categorias" id="FeriaEmpresarial">
    <div class="categorias_div">
        <div class="title-categorias">
            <h1>Categoria:Feria Empresarial</h1>
            <div class="descargar-formato">
                <p>Recuerda descargar el formato necesario para esta actividad</p>
                <button id="descargar" onclick="descargarArchivoFeriaEmpresarial()">Descargar <img class="icon-descarga" src="./img/downloads.png" alt=""></button>
            </div>
        </div>    
        <div class="formulario">
            <form action="./config/registrarFeria.php" method="POST" id="form-feria" class="form" enctype="multipart/form-data">
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
                    <div class="coolinput">
                        <input type="submit" value="Registrarme" class="button-registro">
                    </div>
                    
            </form>
        </div>
    </div>
</section>