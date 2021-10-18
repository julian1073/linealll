<?php 
    class BD {
        private static $instance = NULL;

        public static function createInstance() {

            if (!isset( self::$instance )) {
                $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO(
                    'mysql:host=dblinea.cutiqdwfh31b.us-east-2.rds.amazonaws.com;dbname=db_linea','admin','dblinea2021', $opcionesPDO
                );
            }
            return self::$instance;
        }
    }
?>