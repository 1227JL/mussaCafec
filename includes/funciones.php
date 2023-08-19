<?php   
    define('TEMPLATES_URL', __DIR__.'/templates');
    define('FUNCIONES_URL', __DIR__.'funciones.php');
    
    function incluirTemplate( string $nombre, bool $inicio = false ) {
        include TEMPLATES_URL."/$nombre.php";
    }

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
    

    