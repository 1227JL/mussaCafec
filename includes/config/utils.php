<?php 

function estaAutenticado() : void {
    if(!$_SESSION['login']){
        header('Location:index.php');
    }
}
//FUNCIONES DEFINIDOS
function BorrarErrores(){
    if(isset($_SESSION['errores'])){
        $_SESSION['errores']=null;
    }
    if(isset($_SESSION['registrado'])){
        $_SESSION['registrado']=null;
    } 
    if(isset($_SESSION['delete'])){
        $_SESSION['delete']=null;
    }
    if(isset($_SESSION['editado'])){
        $_SESSION['editado']=null;
    }
    if(isset($_SESSION['error-login'])){
        $_SESSION['error-login']=null;
    }
}

function mostrarAlerta($errores,$parametro){
    $alerta = "";
    if(isset($errores[$parametro]) && !empty($parametro)){
        $alerta = "
        <div class='error-archivo'>
            <h1>Error al registrar</h1>
            <p class='error-archivo'>". $errores[$parametro]."</p>
        </div>";
    }
    return $alerta;
}
function obtenerTotal($conexion,$tabla){
    $sql = "SELECT COUNT(id) FROM $tabla;";
        $totalResultado = mysqli_query($conexion, $sql);
        $total = mysqli_fetch_array($totalResultado);
        $total = (int) $total[0];
        return $total;
}

function obtenerDatos($db,$tabla,$id){
    $sql = "SELECT * FROM $tabla";
        if(isset($id)){
            $sql .= " WHERE id = $id";
        }
    $obtener = mysqli_query($db, $sql);
    return $obtener;
}
?>