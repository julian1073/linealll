<?php
//Función para evitar el CSRF
    function AntiCSRF(){
        if (!isset($_POST['CSRFToken'])) {
            echo "Su solicitud no pudo ser tramitada.";
            die();
        }

        if ($_POST['CSRFToken'] != $_SESSION['AntiCSRF']) {
            echo "Su solicitud no pudo ser tramitada.";
            die();
        }
    }

    //Función para generar el  AntiCSRF
    function GenerarAntiCSRF(){
        $_SESSION['AntiCSRF'] = random_int(1000,100000);
        return $_SESSION['AntiCSRF'];
    }
?>