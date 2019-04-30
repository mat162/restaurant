<?php


class View
{
    protected $data;
    protected $path;

    function __construct($data = [], $path = null)
    {
        if (!$path)
        {
            $path = self::getDefaultViewPath();
        }
        if (!file_exists($path))
        {
            throw new Exception("le template $path n'existe pas");
        }

        $this->data = $data;
        $this->path = $path;
    }


    public static function getDefaultViewPath()
    {
        $router = App::getRouter();
        if(!$router)
        {
            return false;
        }
        $controller_dir = $router->getController();
        $template_name = $router->getAction().'.php';
        return VIEW.DS.$controller_dir.DS.$template_name;
    }


    public function render()
    {
        $data = $this->data;
        ob_start();
        include $this->path;
        $content = ob_get_clean();
        return $content;
    }
}