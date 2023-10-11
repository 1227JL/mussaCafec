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
    
    <section id="programacion">
    <?php if(isset($_GET['edit_id'])):
        $id = $_GET['edit_id'];
        $resultado = obtenerDatos($db,'programacion',$id);
        if(mysqli_num_rows($resultado)> 0):
            $datos = mysqli_fetch_array($resultado)
    ?>
    <form action="../../includes/config/editarProgramacion.php" method="POST" class="form" id="form-robotica">
        <input type="hidden" name="id" value="<?=$datos['id']?>">
        <fieldset>
            <legend>Información del Grupo</legend>
            <div class="coolinput">
                <label for="categoria" class="text">Categoria de participacion:</label>
                <select name="categoria" id="categoria" class="select">
                    <option value="">Seleccione una opcion</option>
                    <option value="Principiante" <?= $datos['categoria'] == 'Principiante' ? 'selected' : ''; ?>>Principiante</option>
                    <option value="Principiante" <?= $datos['categoria'] == 'Basico' ? 'selected' : ''; ?>>Basico</option>
                    <option value="Intermedio" <?= $datos['categoria'] == 'Intermedio' ? 'selected' : ''; ?>>Intermedio</option>
                    <option value="Avanzado" <?= $datos['categoria'] == 'Avanzado' ? 'selected' : ''; ?>>Avanzado</option>
                    
                </select>
            </div>
            <div class="coolinput">
                <label for="Institucion" class="text">Institucion:</label>
                <input type="text" name="Institucion" class="input" id="Institucion" value="<?=$datos['institucion']?>">
            </div>
            <div class="coolinput">
                <label for="equipo" class="text">Nombre de equipo:</label>
                <input type="text" value="<?=$datos['nombre_equipo']?>" class="input" id="equipo" name="equipo">
            </div>
            <div class="coolinput">
                <label for="representante" class="text">Nombre del representante:</label>
                <input type="text" value="<?=$datos['representante']?>" class="input" id="representante" name="representante">
            </div>
            <?php if(!empty($datos['participante2'])): ?>
            <div class="coolinput">
                <label for="participante2" class="text">Participante 2:</label>
                <input type="text" value="<?=$datos['participante2']?>" class="input" id="participante2" name="participante2">
            </div>
            <?php endif; ?>
            <?php if(!empty($datos['participante3'])): ?>
            <div class="coolinput">
                <label for="participante3" class="text">Participante 2:</label>
                <input type="text" value="<?=$datos['participante3']?>" class="input" id="participante3" name="participante3">
            </div>
            <?php endif; ?>
            <div class="coolinput">
                <label for="Email" class="text">Email:</label>
                <input type="email" value="<?=$datos['correo']?>" name="correo" class="input" id="Email">
            </div>
            <div class="coolinput">
                <label for="contacto" class="text">Contacto:</label>
                <input type="text" value="<?=$datos['contacto']?>" name="contacto" class="input" id="contacto">
            </div>
            <input class="boton-verde-block" type="submit" value="Guardar Cambios" class="button-registro">
        </fieldset>
    </form>
    <?php else: ?>
        <h1>Este proyecto no existe</h1>
    <?php endif; ?>
    <?php endif; ?>
    
    <?php $resultadoProgramacion = obtenerDatos($db,'programacion',null);
        if(mysqli_num_rows($resultadoProgramacion)>0): //se verifica si datos seleccionados?>    
        <div class="titulo-cont"><h1 class="heading">Proyectos de Programacion Registrados</h1></div>
        <div class="buscadores">
            <div class="checkbox more">
                <div class="institucion">
                    <label>
                        <input type="checkbox" class="categoria-checkbox" value="Principiante">
                        Principiante
                    </label>
                </div>
                <div class="institucion">
                    <label>
                        <input type="checkbox" class="categoria-checkbox" value="Basico">
                        Basico
                    </label>
                </div>
                <div class="institucion">
                    <label>
                        <input type="checkbox" class="categoria-checkbox" value="Intermedio">
                        Intermedio
                    </label>
                </div>
                <div class="institucion">
                    <label>
                        <input type="checkbox" class="categoria-checkbox" value="Avanzado">
                        Avanzado
                    </label>
                </div>
            </div>
            <div class="coolinput">
                <label for="buscadorR">Busca un Equipo</label>
                <input type="text" id="buscadorR" placeholder="Buscar por Nombre de equipo" class="input">
            </div>
        </div>
    <div class="resultadoRobotica">
        <?php  
        while($datosR = mysqli_fetch_array($resultadoProgramacion)): ?>
            <div class="proyectos">
                <div class="proyecto">
                    <div class="datos">
                        <span>Categoria</span>
                        <p class="categoria"><?= $datosR['categoria']?></p>
                    </div>
                    <div class="datos">
                        <span>Nombre de la institucion</span>
                        <p><?= $datosR['institucion']?></p>
                    </div>
                    <div class="datos">
                        <span>Nombre de Equipo</span>
                        <p class="Proyecto"><?= $datosR['nombre_equipo']?></p>
                    </div>
                    <div class="datos">
                        <span>Nombre del representante</span>
                        <p><?= $datosR['representante']?></p>
                    </div>
                    <?php if(!empty($datosR['participante2'])):?>
                        <div class="datos">
                        <span>Partcipante 2</span>
                        <p><?= $datosR['participante2']?></p>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($datosR['participante3'])):?>
                        <div class="datos">
                        <span>Partcipante 3</span>
                        <p><?= $datosR['participante3']?></p>
                    </div>
                    <?php endif; ?>
                    <div class="datos">
                        <span>Contacto</span>
                        <p ><?= $datosR['contacto']?></p>
                    </div>
                    <div class="datos">
                        <span>Correo</span>
                        <p ><?= $datosR['correo']?></p>
                    </div>
                    <div class="datos">
                        <span>Terminos</span>
                        <p ><?= $datosR['confirmacion']?></p>
                    </div>
                </div>
                <a class="boton-rojo-block" onclick="eliminarRegistro(<?= $datosR['id']?>)">Eliminar registro</a>
                <a class="boton-verde-block" href="programacion.php?edit_id=<?=$datosR['id']?>" class="edit">Editar registro</a>
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
                                    window.location.href = `../../includes/config/borrarProgramacion.php?delete_id=${id}`
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
            <p>En el momento no hay ningun equipo de Programación registrado</p>
        </div>
    <?php endif; ?>
    </section>
</main>
<?php BorrarErrores(); ?>
<script src="../../src/js/buscadorRobotica.js"></script>
