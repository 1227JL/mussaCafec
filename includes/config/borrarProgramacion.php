<?php 
require_once 'database.php';
$db = conectarDB();

$id = $_GET['delete_id'];

$query = "SELECT * FROM programacion WHERE id = $id;";
$resultado = mysqli_query($db, $query);

if($resultado && mysqli_num_rows($resultado)==1){
    $fila = mysqli_fetch_assoc($resultado);
        $idEliminar = $fila['id'];

        // Eliminar el registro de la base de datos
        $queryEliminar = "DELETE FROM programacion WHERE id = $idEliminar";
        $Eliminar = mysqli_query($db, $queryEliminar);
        if ($Eliminar) {
            $_SESSION['delete'] = "<p>Eliminado correctamente!.</p>";
        } 
}else{
    $_SESSION['delete'] = "<p>No se encontró este registro.</p>";
}
mysqli_close($db);
header('location:../../views/admin/programacion.php');