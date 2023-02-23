<?php
    namespace PracticaMv1\Content\config\settings;

    define('_DIRECTORY_', 'http://localhost/practica_MVC1/');
    define('_ROUTE_', 'Controller.php');
    define('_CONTROLLER_', 'content/controllers/');
    define('_INDEX_FILE_', 'http://localhost/practica_MVC1/index.php');
    define('_THEME_', 'http://localhost/practica_MVC1/assets/');
    define('_MODEL_', 'content/modelo/');
    define('_DB_SERVER_', 'http://localhost/');
    define('_DB_WEB_', 'DB_practica');


    //4 "Define()" adicionales
    define('_CSS_', 'assets/css/styles.css');
    define('_BOOTSTRAP_', 'assets/css/bootstrap.min.css');
    define('_JS_', 'assets/jss/practica.js');
    define('_ICON_', 'assets/icons/icono.svg');

    class sysConfig{

        public function _init()
        {
            if (!file_exists('content/controllers/frontController.php')) {
                require 'content/component/errorPage.php';
            }
        }


        //Retornos de los Define()
        protected function getDirectory(){
			return _DIRECTORY_;
		}
        protected function getRoute(){
			return _ROUTE_;
		}
        protected function getController(){
			return _CONTROLLER_;
		}
        protected function getIndex(){
			return _INDEX_FILE_;
		}
        protected function getTheme(){
			return _THEME_;
		}
        protected function getModel(){
			return _MODEL_;
		}
        protected function getServer(){
			return _DB_SERVER_;
		}
        protected function getWeb(){
			return _DB_WEB_;
		}

    }
?>