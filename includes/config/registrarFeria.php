<?php 

require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$nombreInstitucion = limpiar_cadena($_POST['nombreInstitucion']);
$participantes = limpiar_cadena($_POST['participantes']);
$titulo = limpiar_cadena($_POST['tituloProyecto']);

$errores = [];

if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $nombreArchivoOriginal = $_FILES['archivo']['name'];
    $tamañoArchivo = $_FILES['archivo']['size'];
    $tipoArchivo = $_FILES['archivo']['type'];
    $archivoTemporal = $_FILES['archivo']['tmp_name'];
    $idUnico = uniqid();
    $extension = pathinfo($nombreArchivoOriginal, PATHINFO_EXTENSION);
    $nameSinExtension = pathinfo($nombreArchivoOriginal, PATHINFO_FILENAME);

    // Limitar el nombre del archivo a 50 caracteres
    $nombreArchivo = substr($nameSinExtension, 0, 50 - strlen($extension)). "-" . $idUnico . "." . $extension;

    // Validar el tipo y tamaño del archivo
    $extensionesValidas = array(
        'application/pdf',
        'application/msword', 
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    );    
    $tamañoMaximo = 20 * 1024 * 1024; // 20MB en bytes
    $carpetaDestino = '../../uploads/feria/';

    if (in_array($tipoArchivo, $extensionesValidas)) {
        if ($tamañoArchivo <= $tamañoMaximo) {
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
        $errores['formato-pdf'] = "El archivo debe ser un archivo PDF o una presentación de PowerPoint.";
    }
} else {
    $errores['error-archivo'] = "Error al cargar el archivo, verifique que esté bien definido.";
}

    $sql = "SELECT * FROM feria_empresarial WHERE titulo_proyecto = '$titulo';";
    $obtener = mysqli_query($db, $sql);

    if($obtener && mysqli_num_rows($obtener)==1){
        $errores['existeRegistro'] = "El titulo de proyecto '$titulo' ya esta registrado!. Por favor define otro.";
    }

    if(count($errores)==0){
        $query = "INSERT INTO feria_empresarial (institucion, participantes, titulo_proyecto, archivo) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "ssss",
            $nombreInstitucion, 
            $participantes,
            $titulo,
            $nombreArchivo
        );
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['registrado'] = "
                <p>El proyecto '$titulo' ha sido registrado correctamente!</p>
            " ;
        }

    }else{
        $_SESSION['errores'] = $errores;
    }


mysqli_close($db);
header('location:../../views/Registro/feriaEmpresarial.php');
?>