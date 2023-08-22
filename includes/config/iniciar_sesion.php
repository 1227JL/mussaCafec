<?php 

require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = limpiar_cadena($_POST['usuario']);
    $contrasena = limpiar_cadena($_POST['password']);

    $query = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $contrasena);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if ($resultado && mysqli_num_rows($resultado)==1) {

        $_SESSION['login'] = true;
        mysqli_close($db);
        header('Location: ../../views/admin/Ponentes.php');
        exit();
    } else {
        $_SESSION['error-login'] = "
        <p>El usuario o la contraseña son incorrectos!</p>
        ";
        mysqli_close($db);
        header('Location: ../../views/admin/index.php');
        exit();
    }

}
?>