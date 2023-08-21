<?php 

require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$id = limpiar_cadena($_POST['id']);
$nombreInstitucion = limpiar_cadena($_POST['nombreInstitucion']);
$participantes = limpiar_cadena($_POST['participantes']);
$titulo = limpiar_cadena($_POST['tituloProyecto']);

$errores = [];

$sql = "SELECT * FROM feria_empresarial WHERE id = $id;";
    $obtener = mysqli_query($db, $sql);

    if($obtener && mysqli_num_rows($obtener)>0){
        
        $query = "UPDATE feria_empresarial SET 
        institucion = ?,
        participantes = ?,
        titulo_proyecto = ?
        WHERE id = ?"; 
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, "sssi",
            $nombreInstitucion,
            $participantes,
            $titulo,
            $id
        );
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['registrado'] = "
                <p>El proyecto '$titulo' ha sido registrado correctamente!</p>
            " ;
        }
    }else{
        $_SESSION['editado'] = "
        <p>No se encontro el proyecto!</p>
    ";
    }

    


mysqli_stmt_close($stmt);
mysqli_close($db);
header('location:../../views/admin/feria.php');