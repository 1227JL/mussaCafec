<?php 

require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$nombreInstitucion = limpiar_cadena($_POST['nombreInstitucion']);
$participantes = limpiar_cadena($_POST['participantes']);
$titulo = limpiar_cadena($_POST['tituloProyecto']);

$errores = [];

    $sql = "SELECT * FROM feria_empresarial WHERE titulo_proyecto = '$titulo';";
    $obtener = mysqli_query($db, $sql);

    if($obtener && mysqli_num_rows($obtener)==1){
        $errores['existeRegistro'] = "El titulo de proyecto '$titulo' ya esta registrado!. Por favor define otro.";
    }

    if(count($errores)==0){
        $query = "INSERT INTO feria_empresarial (institucion, participantes, titulo_proyecto) VALUES (?, ?, ?);";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "sss",
            $nombreInstitucion, 
            $participantes,
            $titulo 
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
header('location:../../views/registro/feriaEmpresarial.php');
?>