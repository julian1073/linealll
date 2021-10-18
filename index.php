<?php
    try {
        
        $controller = 'paginas';
        $action = 'inicio';
        
        if ( isset($_GET['controller']) && isset($_GET['action']) ) {
            if ( ($_GET['controller'] != '') && ($_GET['action'] != '') ) {
                $controller = $_GET['controller'];
                $action = $_GET['action'];
            }
        }
        
        require_once('views/template.php');
        
    } catch (\Throwable $th) {
        header("Location:./?controller=paginas&action=error");
    }
?>