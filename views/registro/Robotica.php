<?php heade ?>
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
                        <input type="checkbox" placeholder="Define un contacto..." name="confirmacion" class="input" id="confirmacion">
                    </div>
                    <div class="coolinput">
                        <input type="submit" value="Registrarme" class="button-registro">
                    </div>
                    
            </form>
        </div>
    </div>
</section>