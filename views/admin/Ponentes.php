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
    <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'tamaño'):"" ?>
    <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'formato-docx'):"" ?>
    <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'formato-pdf'):"" ?>
    <?php echo isset($_SESSION['errores']) ? mostrarAlerta($_SESSION['errores'],'existeRegistro'):"" ?>
</div>
<section id="ponencia">
<?php if(isset($_GET['edit_id'])):
    $id = $_GET['edit_id'];
    $resultado = obtenerDatos($db,'ponentes',$id);
    if(mysqli_num_rows($resultado)> 0):
        $datos = mysqli_fetch_array($resultado)
?>
<form action="../../includes/config/editarPonentes.php" method="POST" class="form" id="form-ponente" enctype="multipart/form-data">
    <input type="hidden" name="id_proyecto" value="<?= $datos['id']?>">
    <div class="coolinput">
        <label for="ejetematico" class="text">Eje tematico:</label>
        <select id="ejetematico" class="select" onchange="mostrar()" name="ejetematico">
            <option value="">Seleccione una opcion</option>
            <option value="Empresarial" <?= $datos['eje_tematico'] == 'Empresarial' ? 'selected' : ''; ?>>Empresarial</option>
            <option value="Agroindustrial" <?= $datos['eje_tematico'] == 'Agroindustrial' ? 'selected' : ''; ?>>Agroindustrial</option>
            <option value="Energías renovables" <?= $datos['eje_tematico'] == 'Energías renovables' ? 'selected' : ''; ?>>Energías renovables</option>
            <option value="Protección al medio ambiente" <?= $datos['eje_tematico'] == 'Protección al medio ambiente' ? 'selected' : ''; ?>>Protección al medio ambiente</option>
            <option value="Arquitectura y Construcciones Sostenibles" <?= $datos['eje_tematico'] == 'Arquitectura y Construcciones Sostenibles' ? 'selected' : ''; ?>>Arquitectura y Construcciones Sostenibles</option>
        </select>
    </div>
    <div class="coolinput">
        <label for="Institucion" class="text">Institución de participación:</label>
        <select id="Institucion" class="select" onchange="mostrar()" name="tipoInstitucion">
            <option value="">Seleccione una opcion</option>
            <option value="SENA" <?= $datos['tipo_Institucion'] == 'SENA' ? 'selected' : ''; ?>> SENA </option>
            <option value="Externa" <?= $datos['tipo_Institucion'] == 'Externa' ? 'selected' : ''; ?>>Externa</option>
        </select>
    </div>
    <?php if($datos['tipo_Institucion']=="SENA"):?>
        <div class="coolinput">
            <label for="titulada" class="text">Titulada:</label>
            <input type="text" value="<?= $datos['titulada']?>" name="titulada" class="input" id="titulada">
        </div>
        <div class="coolinput">
            <label for="ficha" class="text">Ficha:</label>
            <input type="text" value="<?= $datos['ficha']?>" name="ficha" class="input" id="ficha" pattern="[0-9]{4,20}">
        </div>
    <?php else: ?>
        <div class="coolinput">
            <label for="externa" class="text">Define tu Insitucion:</label>
            <input type="text" value="<?= $datos['institucion']?>" name="externa" class="input" id="externa">
        </div>
    <?php endif; ?>
        <div class="coolinput">
            <label for="nombre1" class="text">Nombre Ponente:</label>
            <input type="text" value="<?= $datos['ponente_1']?>" name="nombre1" class="input" id="nombre1">
        </div>
        <div class="coolinput">
            <label for="correo1" class="text">Correo:</label>
            <input type="text" value="<?= $datos['correo_1']?>" name="correo1" class="input" id="correo1">
        </div>
        <div class="coolinput">
            <label for="contacto1" class="text">Contacto:</label>
            <input type="text" value="<?= $datos['contacto_1']?>" name="contacto1" class="input" id="contacto1">
        </div>
    <?php if(!empty($datos['ponente_2'])): ?>
        <div class="coolinput">
            <label for="nombre2" class="text">Nombre Ponente 2:</label>
            <input type="text" value="<?= $datos['ponente_2']?>" name="nombre2" class="input" id="nombre2">
        </div>
        <div class="coolinput">
            <label for="correo2" class="text">Correo:</label>
            <input type="text" value="<?= $datos['correo_2']?>" name="correo2" class="input" id="correo2">
        </div>
        <div class="coolinput">
            <label for="contacto2" class="text">Contacto:</label>
            <input type="text" value="<?= $datos['contacto_2']?>" name="contacto2" class="input" id="contacto2">
        </div>
    <?php endif; ?>
    <?php if(!empty($datos['ponente_3'])): ?>
        <div class="coolinput">
            <label for="nombre3" class="text">Nombre Ponente 3:</label>
            <input type="text" value="<?= $datos['ponente_3']?>" name="nombre3" class="input" id="nombre3">
        </div>
        <div class="coolinput">
            <label for="correo3" class="text">Correo:</label>
            <input type="text" value="<?= $datos['correo_3']?>" name="correo3" class="input" id="correo3">
        </div>
        <div class="coolinput">
            <label for="contacto3" class="text">Contacto:</label>
            <input type="text" value="<?= $datos['contacto_3']?>" name="contacto3" class="input" id="contacto3">
        </div>
    <?php endif; ?>
    <div class="coolinput">
        <label for="titulo" class="text">Titulo del Proyecto:</label>
        <input type="text" value="<?= $datos['titulo_proyecto']?>" name="titulo" class="input" id="titulo">
    </div>
    <div class="coolinput">
        <label for="Institucion" class="text">Tipo de proyecto:</label>
        <select name="tipoProyecto" id="Institucion" class="select">
            <option value="">Seleccione una opcion</option>
            <option value="Formativo" <?= $datos['tipo_proyecto'] == 'Formativo' ? 'selected' : ''; ?>>Formativo</option>
            <option value="Productivo"<?= $datos['tipo_proyecto'] == 'Productivo' ? 'selected' : ''; ?>>Productivo</option>
            <option value="SENNOVA" <?= $datos['tipo_proyecto'] == 'SENNOVA' ? 'selected' : ''; ?>>SENNOVA</option>
            <option value="Externo" <?= $datos['tipo_proyecto'] == 'Externo' ? 'selected' : ''; ?>>Externo</option>
        </select>
    </div>
    <div class="coolinput">
        <span class="drop-title">Si desea editar un archivo subelo en el campo correspodiente.</span>
    </div>
    <div class="coolinput">
        <label for="file-input" class="drop-container">
            <span class="drop-title">Selecciona tus archivos PDF o Power Point aqui.</span>
            <input type="file" name="archivo_1" accept=".pdf" id="file-input">
            <span class="drop-title">Selecciona tus archivos Word aqui.</span>
            <input type="file" name="archivo_2" accept=".docx" id="file-input">
        </label>
    </div>
    <div class="coolinput">
        <input type="submit" value="Guardar" class="button-registro">
    </div>
</form>
<?php else: ?>
    <h1>Este proyecto no existe</h1>
<?php endif; ?>
<?php endif; ?>


<?php $resultado = obtenerDatos($db,'ponentes',null);
    if(mysqli_num_rows($resultado)>0): //se verifica si datos seleccionados?>    
    <div class="titulo-cont"><h1>Ponencias Registradas</h1></div>
    <div class="buscadores">
        <div class="checkbox">
            <p>Filtrar por institucion:</p>
            <input type="checkbox" id="filtroSena" name="filtroTipo" value="SENA" class="check">
            <label for="filtroSena">SENA</label>
            <input type="checkbox" id="filtroExterna" name="filtroTipo" value="Externa" class="check">
            <label for="filtroExterna">Externa</label>
        </div>
        <div class="coolinput">
            <input type="text" id="busquedaInput" placeholder="Buscar por Título" class="input">
        </div>
    </div>
    
    <div class="resultados">
        <?php 
        while($datos = mysqli_fetch_array($resultado)):  ?>
            <div class="proyectos">
                <div>
                    <div class="datos">
                        <h3>Titulo de Proyecto</h3>
                        <p id="titulo"><?= $datos['titulo_proyecto']?></p>
                    </div>
                    <div class="datos">
                        <h3>Eje tematico</h3>
                        <p><?= $datos['eje_tematico']?></p>
                    </div>
                    <div class="datos">
                        <h3>Tipo de Institucion</h3>
                        <p id="tipo"><?= $datos['tipo_Institucion']?></p>
                    </div>
                    <?php if($datos['tipo_Institucion'] == 'SENA'): ?>
                    <div class="datos">
                        <h3>Titulada</h3>
                        <p><?= $datos['titulada']?></p>
                    </div>
                    <div class="datos">
                        <h3>Ficha</h3>
                        <p><?= $datos['ficha']?></p>
                    </div>
                    <?php else: ?>
                        <div class="datos">
                        <h3>Nombre de la insitucion</h3>
                        <p><?= $datos['institucion']?></p>
                    </div>
                    <?php endif; ?>
                    <div class="datos">
                        <h3>Nombre ponente</h3>
                        <p><?= $datos['ponente_1']?></p>
                    </div>
                    <div class="datos">
                        <h3>Email ponente</h3>
                        <p><?= $datos['correo_1']?></p>
                    </div>
                    <div class="datos">
                        <h3>Contacto ponente</h3>
                        <p><?= $datos['contacto_1']?></p>
                    </div>
                    <?php if(!empty($datos['ponente_2'])): ?>
                        <div class="datos">
                        <h3>Nombre ponente 2</h3>
                        <p><?= $datos['ponente_2']?></p>
                    </div>
                    <div class="datos">
                        <h3>Email ponente 2</h3>
                        <p><?= $datos['correo_2']?></p>
                    </div>
                    <div class="datos">
                        <h3>Contacto ponente 2</h3>
                        <p><?= $datos['contacto_2']?></p>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($datos['ponente_3'])): ?>
                        <div class="datos">
                        <h3>Nombre ponente 3</h3>
                        <p><?= $datos['ponente_3']?></p>
                    </div>
                    <div class="datos">
                        <h3>Email ponente 3</h3>
                        <p><?= $datos['correo_3']?></p>
                    </div>
                    <div class="datos">
                        <h3>Contacto ponente 3</h3>
                        <p><?= $datos['contacto_3']?></p>
                    </div>
                    <?php endif; ?>
                    <div class="datos">
                        <h3>Archivo para expocision</h3>
                        <a href="../../uploads/ponentes/<?= $datos['archivo_1']?>" download><?= $datos['archivo_1']?></a>
                    </div>
                    <div class="datos">
                        <h3>archivo de informacion</h3>
                        <a href="../../uploads/ponentes/<?= $datos['archivo_2']?>" download><?= $datos['archivo_2']?></a>
                    </div>
                    <div class="datos">
                        <a href="../../includes/config/borrarPonente.php?delete_id=<?=$datos['id']?>" class="delete">Eliminar registro</a>
                    </div>
                    <div class="datos">
                        <a href="Ponentes.php?edit_id=<?=$datos['id']?>"  class="edit">Editar registro</a>
                    </div>
                </div>
                <br>
            </div>
        <?php endwhile; ?>  
    </div>
<?php else: //si no se encontraron datos en la busqueda ?>
    <div class="sin-registros">
                <h3>Lo sentimos!</h3>
                <p>En el momento no hay ninguna ponencia registrada</p>
    </div>
<?php endif; ?>
</section>
<?php BorrarErrores(); ?>
<script src="../../src/js/buscadorPonentes.js"></script>
