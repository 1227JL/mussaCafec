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
            <form action="./config/registrarRobotica.php" method="POST" class="form">
                    <div class="coolinput">
                        <label for="categoria" class="text">Categoria de participacion:</label>
                        <select name="categoria" id="categoria" class="select">
                            <option value="">Seleccione una opcion</option>
                            <option value="Robot seguidor de linea">Robot seguidor de linea</option>
                            <option value="Mini sumo">Mini sumo</option>
                            <option value="Futbolero o de servicio">Futbolero o de servicio</option>
                        </select>
                    </div>
                    <div class="coolinput">
                        <label for="InstitucionRobotica" class="text">Institucion:</label>
                        <input type="text" placeholder="Nombre de la Institucion" name="InstitucionRobotica" class="input" id="InstitucionRobotica">
                    </div>
                    <div class="coolinput">
                        <span class="form-title">Nombre completo del participantes o participantes (máx. 2 por categoría)</span>
                    </div>
                    <div class="coolinput">
                        <label for="nombre1" class="text">Nombre del participante:</label>
                        <input type="text" placeholder="..." class="input" id="nombre1" name="nombre1">
                    </div>
                    <div class="coolinput">
                        <label for="Email1" class="text">Email:</label>
                        <input type="email" placeholder="Email del primer participante..." name="Email1" class="input" id="Email1">
                    </div>
                    <div class="coolinput">
                        <label for="contacto1" class="text">Contacto:</label>
                        <input type="text" placeholder="Contacto del primer participante..." name="contacto1" class="input" id="contacto1">
                    </div>
                    <div class="coolinput">
                        <label for="nombre2" class="text">Nombre del participante 2:</label>
                        <input type="text" placeholder="..." class="input" id="nombre2" name="nombre2">
                    </div>
                    <div class="coolinput">
                        <label for="Email2" class="text">Email:</label>
                        <input type="email" placeholder="Email del segundo participante..." name="Email2" class="input" id="Email2">
                    </div>
                    <div class="coolinput">
                        <label for="contacto2" class="text">Contacto:</label>
                        <input type="text" placeholder="Contacto del segundo participante..." name="contacto2" class="input" id="contacto2">
                    </div>
                    <div class="coolinput">
                        <input type="submit" value="Registrarme" class="button-registro">
                    </div>
                    
            </form>
        </div>
    </div>
</section>