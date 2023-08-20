<?php   

    function estaAutenticado() : void {
        session_start();

        if(!$_SESSION['login']){
            header('Location: /admin/ingreso.php');
        }
    }

    function debugear($variable){
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';

        exit;
    }

    function getCurrentURL(){
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        return $url;
    }
    
    function getCurrentPath($url){
        $parsedUrl = parse_url($url);
        return $parsedUrl['path'];
    }

    function replaceSpacesWithHyphens($text) {
        return str_replace(' ', '-', $text);
    }

    function replaceHyphensWithSpaces($text) {
        return str_replace('-', ' ', $text);
    }

    function remove_menu_param_from_url() {
        $url = $_SERVER['PHP_SELF'];
    
        // Parse the query string into an associative array
        parse_str($_SERVER['QUERY_STRING'], $query_params);
    
        // Remove the 'menu' parameter if it exists
        if (isset($query_params['menu'])) {
            unset($query_params['menu']);
        }
    
        // Rebuild the query string without the 'menu' parameter
        $new_query_string = http_build_query($query_params);
    
        // Reconstruct the full URL without the 'menu' parameter
        if ($new_query_string) {
            $url .= '?' . $new_query_string;
        }
    
        return $url;
    }
    
    function formatearFecha(string $fecha): string {
        $dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        
        // Convierte la fecha en un objeto DateTime
        $fechaObj = new DateTime($fecha);
        
        // Obtiene el número del día de la semana (0 para Domingo, 1 para Lunes, etc.)
        $numeroDia = $fechaObj->format('w');
        
        // Obtén el nombre del día de la semana usando el array de días
        $nombreDia = $dias[$numeroDia];
        
        // Construye la fecha formateada con el nombre del día
        $fechaFormateada = $nombreDia . ', ' . $fechaObj->format('d/m/Y');
        
        return $fechaFormateada;
    }
//FUNCIONES DEFINIDOS
    function BorrarErrores(){

        if(isset($_SESSION['errores'])){
            $_SESSION['errores']=null;
        }
    
        if(isset($_SESSION['registrado'])){
            $_SESSION['registrado']=null;
        }
        
        if(isset($_SESSION['publicacionCreada'])){
            $_SESSION['publicacionCreada']=null;
        }
        if(isset($_SESSION['delete'])){
            $_SESSION['delete']=null;
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
    
    function obtenerTotal($conexion,$tabla,$campo){
        $sql = "SELECT COUNT($campo) FROM $tabla  ";
            
            $totalResultado = mysqli_query($conexion, $sql);
            $total = mysqli_fetch_array($totalResultado);
            $total = (int) $total[0];
            return $total;
    }
    
    function obtenerDatos($db,$tabla){
        $sql = "SELECT * FROM $tabla";
        $obtener = mysqli_query($db, $sql);
        return $obtener;
    }
    
    define('TEMPLATES_URL', 'includes/templates');

    function incluirTemplate( string $nombre, bool $inicio = false ) {
        include TEMPLATES_URL."/$nombre.php";
    }
    
    function limpiar_cadena($cadena){
        $cadena = trim($cadena); // la funcion trim elimina espacios en blanco del inicio o al final de la cadena
        $cadena = stripcslashes($cadena);  //stripcslashes quita las barras en un string con comillas escapadas
        $cadena = str_ireplace("<script>", " " ,$cadena); //reemplaza un texto mediante una busqueda, esta version es incensible para mayusculas y minusculas
        //aqui esta reemplazando los primeros parametros por espacios vacios...Esto se usa para evitar inyeccion SQL
        $cadena = str_ireplace("</script>", " " ,$cadena); 
        $cadena = str_ireplace("<script src", "", $cadena);
        $cadena = str_ireplace("<script type=", "", $cadena);
        $cadena = str_ireplace("SELECT * FROM", "", $cadena);
        $cadena = str_ireplace("DELETE FROM", "", $cadena);
        $cadena = str_ireplace("INSERT INTO", "", $cadena);
        $cadena = str_ireplace("DROP TABLE", "", $cadena);
        $cadena = str_ireplace("DROP DATABASE", "", $cadena);
        $cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
        $cadena = str_ireplace("SHOW TABLES;", "", $cadena);
        $cadena = str_ireplace("SHOW DATABASES;", "", $cadena);
        $cadena = str_ireplace("<?php", "", $cadena);
        $cadena = str_ireplace("?>", "", $cadena);
        $cadena = str_ireplace("--", "", $cadena);
        $cadena = str_ireplace("^", "", $cadena);
        $cadena = str_ireplace("<", "", $cadena);
        $cadena = str_ireplace("[", "", $cadena);
        $cadena = str_ireplace("]", "", $cadena);
        $cadena = str_ireplace("==", "", $cadena);
        $cadena = str_ireplace(";", "", $cadena);
        $cadena = str_ireplace("::", "", $cadena);
        $cadena=trim($cadena);
        $cadena=stripslashes($cadena);
        return $cadena;
    }