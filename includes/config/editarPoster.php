<?php 

require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$id = limpiar_cadena($_POST['id']);
$institucion = limpiar_cadena($_POST['nombreInstitucion']);
$titulo = limpiar_cadena($_POST['tituloProyecto']);

$nombre_1 = isset($_POST['participante1']) ? limpiar_cadena($_POST['participante1']) : null ;
$correo_1 = isset($_POST['correo1']) ? limpiar_cadena($_POST['correo1']) : null ;
$contacto_1 = isset($_POST['contacto1']) ? limpiar_cadena($_POST['contacto1']) : null;
$nombre_2 = isset($_POST['participante2']) ? limpiar_cadena($_POST['participante2']) : null ;
$correo_2 = isset($_POST['correo2']) ? limpiar_cadena($_POST['correo2']) : null ;
$contacto_2 = isset($_POST['contacto2']) ? limpiar_cadena($_POST['contacto2']) : null;
$nombre_3 = isset($_POST['participante3']) ? limpiar_cadena($_POST['participante3']) : null ;
$correo_3 = isset($_POST['correo3']) ? limpiar_cadena($_POST['correo3']) : null ;
$contacto_3 = isset($_POST['contacto3']) ? limpiar_cadena($_POST['contacto3']) : null;
$nombre_3 = isset($_POST['participante3']) ? limpiar_cadena($_POST['participante3']) : null ;
$correo_3 = isset($_POST['correo3']) ? limpiar_cadena($_POST['correo3']) : null ;
$contacto_3 = isset($_POST['contacto3']) ? limpiar_cadena($_POST['contacto3']) : null;

$errores = [];

$sql = "SELECT * FROM poster WHERE id = $id;";
$obtener = mysqli_query($db, $sql);

if($obtener && mysqli_num_rows($obtener)>0){
    $datos = mysqli_fetch_array($obtener);

        $archivoActual = $datos['archivo'];
    
        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES['archivo']['name'];
            $tamañoArchivo = $_FILES['archivo']['size'];
            $tipoArchivo = $_FILES['archivo']['type'];
            $archivoTemporal = $_FILES['archivo']['tmp_name'];
        
            // Validar el tipo y tamaño del archivo
            $extensionValida = 'application/pdf';    
            $tamañoMaximo = 20 * 1024 * 1024; // 20MB en bytes
            $carpetaDestino = '../../uploads/poster/';
        
            if ($tipoArchivo === $extensionValida) {
                if ($tamañoArchivo <= $tamañoMaximo) {
    
                    if (file_exists($carpetaDestino.$archivoActual)) {
                        unlink($carpetaDestino.$archivoActual);
                    }
                    // Mover el archivo a la carpeta "Ponente" 
                    if (!is_dir($carpetaDestino)) {
                        mkdir($carpetaDestino, 0777, true);
                    }
                    $rutaDestino = $carpetaDestino . $nombreArchivo;
                    $moverArchivo = false;
                    if (move_uploaded_file($archivoTemporal, $rutaDestino)) {
                        $moverArchivo = true;
                    } 
                } else {
                    $errores['tamaño'] = "El tamaño de archivo no debe exceder los 20MB.";
                }
            } else {
                $errores['formato-pdf'] = "El contenido subido debe ser tipo PDF.";
            }
        } else {
            $nombreArchivo = $archivoActual;
        }
    


    if (count($errores) == 0) {

        $query = "UPDATE poster SET 
        institucion = ?,
        nombre_1 = ?,
        correo_1 = ?,
        contacto_1 = ?,
        nombre_2 = ?,
        correo_2 = ?,
        contacto_2 = ?,
        nombre_3 = ?,
        correo_3 = ?,
        contacto_3 = ?,
        titulo = ?,
        archivo = ?
        WHERE id = ?"; 

        $stmt = mysqli_prepare($db, $query);

        mysqli_stmt_bind_param($stmt, "ssssssssssssi",
        $institucion,
        $nombre_1, 
        $correo_1, 
        $contacto_1, 
        $nombre_2,  
        $correo_2,
        $contacto_2, 
        $nombre_3,
        $correo_3,
        $contacto_3, 
        $titulo,
        $nombreArchivo,
        $id 
        );
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['editado'] = "
                <p>El proyecto '$titulo' ha sido actualizado correctamente!</p>
            " ;
        }
    }else{
        $_SESSION['errores'] = $errores;
    }
    

}else{
    $_SESSION['editado'] = "
        <p>No se encontro el proyecto!</p>
    ";
}
mysqli_stmt_close($stmt);
mysqli_close($db);
header('location:../../views/admin/poster.php');