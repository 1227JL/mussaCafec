<?php 
require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$categoria = limpiar_cadena($_POST['categoria']);
$institucion = limpiar_cadena($_POST['InstitucionRobotica']);
$titulo = limpiar_cadena($_POST['tituloR']);
$email = limpiar_cadena($_POST['correo']);
$contacto = limpiar_cadena($_POST['contacto']);
$check = $_POST['confirmacion'];

if($check == 'on'){
    $check = "Aceptó terminos";
}

$errores = [];

$sql = "SELECT * FROM robotica WHERE nombre_proyecto = '$titulo';";
$obtener = mysqli_query($db, $sql);

if($obtener && mysqli_num_rows($obtener)==1){
    $errores['existeRegistro'] = "El titulo de proyecto '$titulo' ya esta registrado! Por favor define otro.";
}

if(count($errores)== 0){

    $query = "INSERT INTO robotica (
    categoria,
    institucion,
    nombre_proyecto,
    contacto,
    correo,
    confirmacion) VALUES ( ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "ssssss",
            $categoria,
            $institucion, 
            $titulo,
            $contacto,
            $email,
            $check
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
header('location:../../views/registro/Robotica.php');

?>