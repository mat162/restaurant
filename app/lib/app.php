<?php

class App
{
    public static $router;
    public static $db;

    public static function getRouter()
    {
        return self::$router;
    }

    public static function run($uri)
    {
        //      annonce/show/4654
        self::$router = new Router($uri);
        $class = str_replace(" ", "", self::$router->getController());
        //      annonce
        $controller_class = ucfirst($class."Controller");
        //      AnnonceController
        $controller_method = strtolower(self::$router->getAction());
        //      show
        $controller_object = new $controller_class();
        //    $controller =              new AnnonceController()
        if (method_exists($controller_object, $controller_method))
        {
            $view_path = $controller_object->$controller_method();
        //          $controller->show()  ===> exécution de la fonction
            $view_object = new View($controller_object->getData(), $view_path);
            $content = $view_object->render();
        }else{
            throw new Exception("La méthode $controller_method n'existe pas ");
        }
        $layout = Config::get('default_layout').".php";
        $layout_path = VIEW.DS.$layout;

        $layout_view_object = new View(compact("content"), $layout_path);
        echo $layout_view_object->render();
    }

}