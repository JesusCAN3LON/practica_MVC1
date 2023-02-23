<?php
    if (file_exists('vendor/autoload.php')) {
        require 'vendor/autoload.php';
    }else{
        if (file_exists('content/component/errorPage.php')) {
            require 'content/component/errorPage.php';
        }else{
            die();
        }
    }
    
    use PracticaMv1\Content\config\settings\sysConfig as sysConfig;

    $globalConfig = new sysConfig();
    $globalConfig->_init();

    use PracticaMv1\Content\controllers\frontController as frontController;
    $indexSystem = new frontController($_REQUEST);


?>