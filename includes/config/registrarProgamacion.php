<?php 

require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$categoria = limpiar_cadena($_POST['categoria']);
$institucion = limpiar_cadena($_POST['Institucion']);
$equipo = limpiar_cadena($_POST['equipo']);
$Representante = limpiar_cadena($_POST['representante']);
$email = limpiar_cadena($_POST['correo']);
$contacto = limpiar_cadena($_POST['contacto']);
$check = $_POST['confirmacion'];
$participante2 = isset($_POST['participante2']) ? limpiar_cadena($_POST['participante2']) : "";
$participante3 = isset($_POST['participante3']) ? limpiar_cadena($_POST['participante3']) : "";


if($check == 'on'){
    $check = "Aceptó terminos";
}

$errores = [];

$sql = "SELECT * FROM programacion WHERE nombre_equipo = '$equipo';";
$obtener = mysqli_query($db, $sql);

if($obtener && mysqli_num_rows($obtener)==1){
    $errores['existeRegistro'] = "El nombre de equipo '$equipo' ya esta registrado!. Por favor define otro.";
}

if(count($errores)== 0){

    $query = "INSERT INTO programacion (
    categoria,
    institucion,
    nombre_equipo,
    representante,
    participante2,
    participante3,
    contacto,
    correo,
    confirmacion) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "sssssssss",
            $categoria,
            $institucion, 
            $equipo,
            $Representante,
            $participante2,
            $participante3,
            $contacto,
            $email,
            $check
        );
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['registrado'] = "
                <p>El equipo '$equipo' ha sido registrado correctamente!</p>
            " ;
        }
}else{
    $_SESSION['errores'] = $errores;
}

mysqli_close($db);
header('location:../../views/Registro/programacion.php');

?>