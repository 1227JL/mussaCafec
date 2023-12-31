<?php
    require_once '../../includes/templates/header.php';
    require_once '../../includes/config/utils.php';
    estaAutenticado();
    require_once '../../includes/config/database.php';
    $db = conectarDB();
    
    $totalPonentes = obtenerTotal($db,'ponentes');
    $totalPoster = obtenerTotal($db,'poster');
    $totalFeria = obtenerTotal($db,'feria_empresarial');
    $totalRobotica = obtenerTotal($db,'robotica');
    $totalprogramacion = obtenerTotal($db,'programacion');
    
    require_once 'includes/templates/nav.php';
?>
<?php if(isset($_SESSION['editado'] )): ?>
<div class='alert-success'>
    <?= $_SESSION['editado'] ; ?>
</div>
<?php endif; ?>

<main class="contain formularios">
    <div class="errores-archivos">
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'tamaño'):"" ?>
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'formato-docx'):"" ?>
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'formato-pdf'):"" ?>
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'existeRegistro'):"" ?>
    </div>
    <section id="poster">
    <?php if(isset($_GET['edit_id'])):
        $id = $_GET['edit_id'];
        $resultado = obtenerDatos($db,'poster',$id);
        if(mysqli_num_rows($resultado)> 0):
            $datos = mysqli_fetch_array($resultado)
    ?>
    <form action="../../includes/config/editarPoster.php" method="POST" id="form-poster" class="form contain" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$datos['id']?>">
        <fieldset>
            <legend>Informaciòn del Grupo</legend>
            <div class="coolinput">
                <label for="nombreInstitucion" class="text">Institucion:</label>
                <input type="text" name="nombreInstitucion" class="input" id="nombreInstitucion" value="<?=$datos['institucion']?>">
            </div>
            <div class="coolinput">
                <label for="tituloProyecto" class="text">Titulo del proyecto:</label>
                <input type="text" name="tituloProyecto" class="input" id="tituloProyecto" value="<?=$datos['titulo']?>">
            </div>
            <div class="coolinput">
                <label for="participante1" class="text">Participante:</label>
                <input type="text" name="participante1" class="input" id="participante1" value="<?=$datos['nombre_1']?>">
            </div>
            <div class="coolinput">
                <label for="correo1" class="text">Correo:</label>
                <input type="text" name="correo1" class="input" id="correo1" value="<?=$datos['correo_1']?>">
            </div>
            <div class="coolinput">
                <label for="contacto1" class="text">Contacto:</label>
                <input type="text" name="contacto1" class="input" id="contacto1" value="<?=$datos['contacto_1']?>">
            </div>
        
            <?php if(!empty($datos['nombre_2'])): ?>
            <div class="coolinput">
                <label for="participante2" class="text">Participante 2:</label>
                <input type="text" name="participante2" class="input" id="participante2" value="<?=$datos['nombre_2']?>">
            </div>
            <div class="coolinput">
                <label for="correo2" class="text">Correo:</label>
                <input type="text" name="correo2" class="input" id="correo2" value="<?=$datos['correo_2']?>">
            </div>
            <div class="coolinput">
                <label for="contacto2" class="text">Contacto:</label>
                <input type="text" name="contacto2" class="input" id="contacto2" value="<?=$datos['contacto_2']?>">
            </div>
            <?php endif; ?>
            <?php if(!empty($datos['nombre_3'])): ?>
            <div class="coolinput">
                <label for="participante3" class="text">Participante 3:</label>
                <input type="text" name="participante3" class="input" id="participante2" value="<?=$datos['nombre_3']?>">
            </div>
            <div class="coolinput">
                <label for="correo3" class="text">Correo:</label>
                <input type="text" name="correo3" class="input" id="correo3" value="<?=$datos['correo_3']?>">
            </div>
            <div class="coolinput">
                <label for="contacto3" class="text">Contacto:</label>
                <input type="text" name="contacto3" class="input" id="contacto3" value="<?=$datos['contacto_3']?>">
            </div>
            <?php endif; ?>
        
            <div class="coolinput">
                <span class="form-title">Si desea editar el archivo subelo en el campo correspodiente.</span>
                <label for="file-input" class="drop-container">
                    <span class="drop-title">Selecciona tus archivos aqui.</span>
                    <input type="file" accept=".pdf" id="file-input" name="archivo">
                </label>
            </div>
            <div class="coolinput">
                <input class="boton-verde-block" type="submit" onclick="editarRegistro(<?=$datosPoster['id']?>)" value="Guardar Cambios" class="button-registro">
            </div>
        </fieldset>
    </form>
    <?php else: ?>
        <h1>Este proyecto no existe</h1>
    <?php endif; ?>
    <?php endif; ?>
    
    <?php $resultadoPoster = obtenerDatos($db,'poster',null);
        if(mysqli_num_rows($resultadoPoster)>0): //se verifica si hay datos seleccionados?>    
        <div class="titulo-cont"><h1 class="heading">Poster registrados</h1></div>
        <div class="buscadores">
            <div class="coolinput">
                <label for="buscador">Buscar un proyecto</label>
                <input type="text" id="buscador" placeholder="Buscar por título" class="input">
            </div>
        </div> 
        <div class="resultado-de-busqueda">
            <?php  
            while($datosPoster = mysqli_fetch_array($resultadoPoster)): ?>
                <div class="proyectos">
                    <div class="proyecto">
                        <div class="datos">
                            <span>Titulo de Proyecto</span>
                            <p id="titulo"><?= $datosPoster['titulo']?></p>
                        </div>
                        <div class="datos">
                            <span>Institucion</span>
                            <p><?= $datosPoster['institucion']?></p>
                        </div>
                        <div class="datos">
                            <span>Nombre ponente</span>
                            <p><?= $datosPoster['nombre_1']?></p>
                        </div>
                        <div class="datos">
                            <span>Email ponente</span>
                            <p><?= $datosPoster['correo_1']?></p>
                        </div>
                        <div class="datos">
                            <span>Contacto ponente</span>
                            <p><?= $datosPoster['contacto_1']?></p>
                        </div>
                        <?php if(!empty($datosPoster['nombre_2'])): ?>
                            <div class="datos">
                            <span>Nombre ponente 2</span>
                            <p><?= $datosPoster['nombre_2']?></p>
                        </div>
                        <div class="datos">
                            <span>Email ponente 2</span>
                            <p><?= $datosPoster['correo_2']?></p>
                        </div>
                        <div class="datos">
                            <span>Contacto ponente 2</span>
                            <p><?= $datosPoster['contacto_2']?></p>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($datosPoster['nombre_3'])): ?>
                            <div class="datos">
                            <span>Nombre ponente 3</span>
                            <p><?= $datosPoster['nombre_3']?></p>
                        </div>
                        <div class="datos">
                            <span>Email ponente 3</span>
                            <p><?= $datosPoster['correo_3']?></p>
                        </div>
                        <div class="datos">
                            <span>Contacto ponente 3</span>
                            <p><?= $datosPoster['contacto_3']?></p>
                        </div>
                        <?php endif; ?>
                        <div class="datos">
                            <span>archivo de informacion</span>
                            <a href="../../uploads/poster/<?= $datosPoster['archivo']?>" download><?= $datosPoster['archivo']?></a>
                        </div>
                    </div>
                    <a class="boton-rojo-block" onclick="eliminarRegistro(<?= $datosPoster['id']?>)">Eliminar registro</a>
                    <a class="boton-verde-block" href="poster.php?edit_id=<?=$datosPoster['id']?>" class="edit">Editar registro</a>
                    <script>
                        function eliminarRegistro(id){
                            swal({
                                title: "¿Estás seguro?",
                                text: "Una vez eliminado, ¡no podrás recuperar este registro!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    swal("¡Poof! ¡El registro ha sido eliminado!", {
                                        icon: "success",
                                    }).then((willDelete) => {
                                        window.location.href = `../../includes/config/borrarPoster.php?delete_id=${id}`
                                    });
                                } else {
                                    swal("¡Tu registro está a salvo!");
                                }
                            });
                        }
                    </script>
                    <br>
                </div>
            <?php endwhile; ?>  
        </div>
    <?php else: //si no se encontraron datos en la busqueda ?>
        <div class="sin-registros">
            <h3>Lo sentimos!</h3>
            <p>En el momento no hay ningun poster registrado</p>
        </div>
    <?php endif; ?>
    </section>
</main>
<?php BorrarErrores(); ?>
<script src="../../src/js/buscadorPoster.js"></script>