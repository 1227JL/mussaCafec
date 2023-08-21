<?php 
require_once 'database.php';
$db = conectarDB();

$id = $_GET['delete_id'];

$query = "SELECT * FROM ponentes WHERE id = $id;";
$resultado = mysqli_query($db, $query);

if($resultado && mysqli_num_rows($resultado)==1){
    $fila = mysqli_fetch_assoc($resultado);
        $idEliminar = $fila['id'];
        $archivo1 = $fila['archivo_1'];
        $archivo2 = $fila['archivo_2'];

        // Borrar los archivos de la carpeta
        if (file_exists("../../uploads/ponentes/$archivo1")) {
            unlink("../../uploads/ponentes/$archivo1");
        }
        
        if (file_exists("../../uploads/ponentes/$archivo2")) {
            unlink("../../uploads/ponentes/$archivo2");
        }

        // Eliminar el registro de la base de datos
        $queryEliminar = "DELETE FROM ponentes WHERE id = $idEliminar";
        $Eliminar = mysqli_query($db, $queryEliminar);
        if ($Eliminar) {
            $_SESSION['delete'] = "<p>Eliminado correctamente!.</p>";
        } 
}else{
    $_SESSION['delete'] = "<p>No se encontró este registro.</p>";
}
mysqli_close($db);
header('location:../../views/admin/Ponentes.php');

?>