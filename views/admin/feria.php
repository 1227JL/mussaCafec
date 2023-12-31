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
        <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'existeRegistro'):"" ?>
    </div>
    <section id="feria">
    <?php if(isset($_GET['edit_id'])):
        $id = $_GET['edit_id'];
        $resultado = obtenerDatos($db,'feria_empresarial',$id);
        if(mysqli_num_rows($resultado)> 0):
            $datos = mysqli_fetch_array($resultado)
    ?>
        <form action="../../includes/config/editarFeria.php" method="POST" id="form-feria" class="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$datos['id']?>">
            <fieldset>
                <legend>Informaciòn del Grupo</legend>
                <div class="coolinput">
                    <label for="nombreInstitucionFeria" class="text">Institucion:</label>
                    <input type="text" name="nombreInstitucion" class="input" id="nombreInstitucionFeria" value="<?=$datos['institucion']?>">
                </div>
                <div class="coolinput">
                    <label for="N-participantes" class="text">N° de participantes:</label>
                    <input type="text" class="input" id="N-participantes" name="participantes" value="<?=$datos['participantes']?>">
                </div>
                <div class="coolinput">
                    <label for="tituloProyectoFeria" class="text">Titulo del proyecto:</label>
                    <input type="text" name="tituloProyecto" class="input" id="tituloProyectoFeria" value="<?=$datos['titulo_proyecto']?>">
                </div>
                <div class="coolinput files">
                    <label for="file-input" class="drop-container">
                        <span class="drop-title">Si desea editar el archivo subelo en el campo correspodiente.</span>
                        <input type="file" accept=".pdf,.doc,.docx" id="file-input" name="archivo">
                    </label>
                </div>
                <input type="submit" value="Guardar Cambios" class="boton-verde-block">
            </fieldset>
        </form>
    <?php else: ?>
        <h1>Este proyecto no existe</h1>
    <?php endif; ?>
    <?php endif; ?>
    <?php $resultadoFeria = obtenerDatos($db,'feria_empresarial',null);
        if(mysqli_num_rows($resultadoFeria)>0): //se verifica si datos seleccionados?>    
        <div class="titulo-cont"><h1 class="heading">Proyectos de feria empresarial registrados</h1></div>
        <div class="buscadores">
            <div class="coolinput">
                <label for="buscadorFeria">Buscador:</label>
                <input type="text" id="buscadorFeria" placeholder="Buscar por título" class="input">
            </div>
        </div>
    <div class="resultadoFeria">
        <?php  
        while($datosFeria = mysqli_fetch_array($resultadoFeria)): ?>
            <div class="proyectos">
                <div class="proyecto">
                    <div class="datos">
                        <span>Nombre de la institucion</span>
                        <p><?= $datosFeria['institucion']?></p>
                    </div>
                    <div class="datos">
                        <span>Numero de Participantes</span>
                        <p><?= $datosFeria['participantes']?></p>
                    </div>
                    <div class="datos">
                        <span>Titulo de proyecto</span>
                        <p id="titulo_feria"><?= $datosFeria['titulo_proyecto']?></p>
                    </div>
                    <div class="datos">
                        <span>archivo de informacion</span>
                        <a href="../../uploads/feria/<?= $datosFeria['archivo']?>" download><?= $datosFeria['archivo']?></a>
                    </div>
                </div>
                <a class="boton-rojo-block" onclick="eliminarRegistro(<?=$datosFeria['id']?>)" class="delete">Eliminar registro</a>
                <a class="boton-verde-block" href="feria.php?edit_id=<?=$datosFeria['id']?>" class="edit">Editar registro</a>
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
                                    window.location.href = `../../includes/config/borrarferia.php?delete_id=${id}`
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
            <p>En el momento no hay ninguna feria registrada</p>
        </div>
    <?php endif; ?>
    </section>
</main>
<?php BorrarErrores(); ?>
<script src="/src/js/buscadorFeria.js"></script>
