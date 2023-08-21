<?php
    require_once '../../includes/templates/header.php';
    require_once '../../includes/config/utils.php';
    require_once '../../includes/config/database.php';
    $db = conectarDB();
    
    $totalPonentes = obtenerTotal($db,'ponentes');
    $totalPoster = obtenerTotal($db,'poster');
    $totalFeria = obtenerTotal($db,'feria_empresarial');
    $totalRobotica = obtenerTotal($db,'robotica');
?>
<div class="">
    <nav>
        <a href="Ponentes.php"><?=$totalPonentes;?> Registros ponentes</a>
        <a href="poster.php"><?=$totalPoster;?> Registros poster</a>
        <a href="feria.php"><?=$totalFeria;?> Registros feria Empresarial</a>
        <a href="Robotica.php"><?=$totalRobotica;?> Registros Robotica</a>
    </nav>
</div>
<?php if(isset($_SESSION['editado'] )): ?>
<div class='message-edit'>
    <?= $_SESSION['editado'] ; ?>
</div>
<?php endif; ?>
<?php if(isset($_SESSION['delete'] )): ?>
<div class='message-delete'>
    <?= $_SESSION['delete'] ; ?>
</div>
<?php endif; ?>

<div class="errores-archivos">
    <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'existeRegistro'):"" ?>
</div>

<section id="robotica">
<?php if(isset($_GET['edit_id'])):
    $id = $_GET['edit_id'];
    $resultado = obtenerDatos($db,'robotica',$id);
    if(mysqli_num_rows($resultado)> 0):
        $datos = mysqli_fetch_array($resultado)
?>
<form action="../../includes/config/editarRobotica.php" method="POST" class="form" id="form-robotica">
    <input type="hidden" name="id" value="<?=$datos['id']?>">
    <div class="coolinput">
        <label for="categoria" class="text">Categoria de participacion:</label>
        <select name="categoria" id="categoria" class="select">
            <option value="">Seleccione una opcion</option>
            <option value="Robot Seguidor de línea velocista" <?= $datos['categoria'] == 'Robot Seguidor de línea velocista' ? 'selected' : ''; ?>>Robot Seguidor de línea velocista</option>
            <option value="Robot Batalla de mini sumo (autónomo)" <?= $datos['categoria'] == 'Robot Batalla de mini sumo (autónomo)' ? 'selected' : ''; ?>>Robot Batalla de mini sumo (autónomo)</option>
            <option value="Robot Futbolero SENA CUP" <?= $datos['categoria'] == 'Robot Futbolero SENA CUP' ? 'selected' : ''; ?>>Robot Futbolero SENA CUP</option>
            <option value="SENABOT" <?= $datos['categoria'] == 'SENABOT' ? 'selected' : ''; ?>>SENABOT</option>
        </select>
    </div>
    <div class="coolinput">
        <label for="InstitucionRobotica" class="text">Institucion:</label>
        <input type="text" name="InstitucionRobotica" class="input" id="InstitucionRobotica" value="<?=$datos['institucion']?>">
    </div>
    <div class="coolinput">
        <label for="tituloR" class="text">Titulo de proyecto:</label>
        <input type="text" value="<?=$datos['nombre_proyecto']?>" class="input" id="tituloR" name="tituloR">
    </div>
    <div class="coolinput">
        <label for="Email" class="text">Email:</label>
        <input type="email" value="<?=$datos['correo']?>" name="correo" class="input" id="Email">
    </div>
    <div class="coolinput">
        <label for="contacto" class="text">Contacto:</label>
        <input type="text" value="<?=$datos['contacto']?>" name="contacto" class="input" id="contacto">
    </div>
    <div class="coolinput">
        <input type="submit" value="Guardar" class="button-registro">
    </div>

</form>
<?php else: ?>
    <h1>Este proyecto no existe</h1>
<?php endif; ?>
<?php endif; ?>

<?php $resultadoRobotica = obtenerDatos($db,'robotica',null);
    if(mysqli_num_rows($resultadoRobotica)>0): //se verifica si datos seleccionados?>    
    <div class="titulo-cont"><h1>Proyectos de robotica registrados</h1></div>
    <div class="buscadores">
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="categoria-checkbox" value="Robot Seguidor de línea velocista">
                    Robot Seguidor de línea velocista
                </label>
                <label>
                    <input type="checkbox" class="categoria-checkbox" value="Robot Batalla de mini sumo (autónomo)">
                    Robot Batalla de mini sumo (autónomo)
                </label>
                <label>
                    <input type="checkbox" class="categoria-checkbox" value="Robot Futbolero SENA CUP">
                    Robot Futbolero SENA CUP
                </label>
                <label>
                    <input type="checkbox" class="categoria-checkbox" value="SENABOT">
                    SENABOT
                </label>
            </div>
            <div class="coolinput">
                <input type="text" id="buscadorR" placeholder="Buscar por Nombre de proyecto" class="input">
            </div>
    </div>
<div class="resultadoRobotica">
    <?php  
    while($datosR = mysqli_fetch_array($resultadoRobotica)): ?>
        <div class="proyectosRobotica">
            <div>
                <div class="datos">
                    <h3>Categoria</h3>
                    <p class="categoria"><?= $datosR['categoria']?></p>
                </div>
                <div class="datos">
                    <h3>Nombre de la institucion</h3>
                    <p><?= $datosR['institucion']?></p>
                </div>
                <div class="datos">
                    <h3>Nombre del Proyecto</h3>
                    <p class="Proyecto"><?= $datosR['nombre_proyecto']?></p>
                </div>
                <div class="datos">
                    <h3>Contacto</h3>
                    <p ><?= $datosR['contacto']?></p>
                </div>
                <div class="datos">
                    <h3>Correo</h3>
                    <p ><?= $datosR['correo']?></p>
                </div>
                <div class="datos">
                    <h3>Terminos</h3>
                    <p ><?= $datosR['confirmacion']?></p>
                </div>
                <div class="datos">
                    <a href="../../includes/config/borrarRobotica.php?delete_id=<?=$datosR['id']?>" class="delete">Eliminar registro</a>
                </div>
                <div class="datos">
                    <a href="Robotica.php?edit_id=<?=$datosR['id']?>" class="edit">Editar registro</a>
                </div>
                
            </div>
            <br>
        </div>
    <?php endwhile; ?>  
</div>
<?php else: //si no se encontraron datos en la busqueda ?>
    <div class="sin-registros">
                <h3>Lo sentimos!</h3>
                <p>En el momento no hay ningun proyecto de robotica registrado</p>
    </div>
<?php endif; ?>
</section>
<?php BorrarErrores(); ?>
<script src="../../src/js/buscadorRobotica.js"></script>