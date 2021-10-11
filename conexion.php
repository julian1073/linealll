<?php 
    class BD {
        private static $instance = NULL;

        public static function createInstance() {

            if (!isset( self::$instance )) {
                $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO(
                    'mysql:host=localhost;dbname=db_linea','root','', $opcionesPDO
                );
                echo 'Conexion realizada';
            }
            return self::$instance;
        }
    }
?>