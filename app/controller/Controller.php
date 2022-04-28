<?php
require 'Autoloader.php';
Autoloader::register();
class Controller{

     /**
     * cette methode gere les interface 
     */
    public function render($templates,$tittle="G-School|Home"){
        $rendering = "../app/views/$templates".".php";
        ob_start(); 
        require $rendering;
        $main = ob_get_clean();
        $tittle = "G-School|Home";
        require '../app/views/templates/app.php';
       
    }
    /**
     * cette methode gere les requette 
     */
    /* public function getApi($controller, $endpoint){
        $controller = ucfirst($controller)."Controller";
        $controller = new $controller();
        $controller->$endpoint();
        
    } */
}

?>