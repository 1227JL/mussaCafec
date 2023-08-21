<?php 
require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$id = limpiar_cadena($_POST['id']);
$categoria = limpiar_cadena($_POST['categoria']);
$institucion = limpiar_cadena($_POST['InstitucionRobotica']);
$titulo = limpiar_cadena($_POST['tituloR']);
$email = limpiar_cadena($_POST['correo']);
$contacto = limpiar_cadena($_POST['contacto']);

$errores = [];

$sql = "SELECT * FROM robotica WHERE id = $id;";
$obtener = mysqli_query($db, $sql);

if($obtener && mysqli_num_rows($obtener)>0){
    
    $query = "UPDATE robotica SET 
    categoria = ?,
    institucion = ?,
    nombre_proyecto = ?,
    contacto = ?,
    correo = ?
    WHERE id = ? "; 
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "sssssi",
        $categoria,
        $institucion,
        $titulo,
        $contacto,
        $email,
        $id
    );
    
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['editado'] = "
            <p>El proyecto '$titulo' ha sido registrado correctamente!</p>
        " ;
    }
}else{
    $_SESSION['editado'] = "
        <p>No se encontro el proyecto!</p>
    ";
}

mysqli_close($db);
header('location:../../views/admin/Robotica.php');