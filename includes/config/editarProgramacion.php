<?php 
require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$id = limpiar_cadena($_POST['id']);
$categoria = limpiar_cadena($_POST['categoria']);
$institucion = limpiar_cadena($_POST['Institucion']);
$Representante = limpiar_cadena($_POST['representante']);
$equipo = limpiar_cadena($_POST['equipo']);
$email = limpiar_cadena($_POST['correo']);
$contacto = limpiar_cadena($_POST['contacto']);
$participante2 = isset($_POST['participante2']) ? limpiar_cadena($_POST['participante2']) : "";
$participante3 = isset($_POST['participante3']) ? limpiar_cadena($_POST['participante3']) : "";

$errores = [];

$sql = "SELECT * FROM programacion WHERE id = $id;";
$obtener = mysqli_query($db, $sql);

if($obtener && mysqli_num_rows($obtener)>0){
    
    $query = "UPDATE programacion SET 
    categoria = ?,
    institucion = ?,
    nombre_equipo = ?,
    representante = ?,
    participante2 = ?,
    participante3 = ?,
    contacto = ?,
    correo = ?
    WHERE id = ? "; 
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "ssssssssi",
        $categoria,
        $institucion,
        $equipo,
        $Representante,
        $participante2,
        $participante3,
        $contacto,
        $email,
        $id
    );
    
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['editado'] = "
            <p>El equipo '$equipo' ha sido editado correctamente!</p>
        " ;
    }
}else{
    $_SESSION['editado'] = "
        <p>No se encontro el proyecto!</p>
    ";
}

mysqli_close($db);
header('location:../../views/admin/programacion.php');