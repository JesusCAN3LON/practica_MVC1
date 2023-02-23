<?php
    namespace PracticaMv1\Content\controllers;

    use PracticaMv1\Content\config\settings\sysConfig as sysConfig;

    class frontController extends sysConfig{
        private $request;

        public function __construct($request)
        {
            $objeto = new sysConfig();

            //Capturando variables de los Define() del sysConfig
            $directorio = $objeto->getController();
            $controladorPHP = $objeto->getRoute();

            if (isset($request['url'])) {
                $this->request = $request["url"];

                //Validando la URL con el metodo y guardando respuesta en variable
                $validacionUrl = $this->getValidarURL();

                if ($validacionUrl == 1) {
                    if (file_exists($directorio.$request['url'].$controladorPHP)) {
                        require_once ($directorio.$request['url'].$controladorPHP);
                    }else{
                        die("<script>location ='?url=errorPage'</script>");
                    }
                }else{
                    die('Invalido');
                }
            }else{
                die("<script>location ='?url=login'</script>");
            }
        }

        private function getValidarURL()
        {
            $respuesta = preg_match_all("/^[a-zA-Z0-9-@\/.=:_#$ ]{1,700}$/", $this->request);
            return $respuesta;
        }
    }

?>