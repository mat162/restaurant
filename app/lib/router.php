<?php

class Router
{
    protected $controller;
    protected $action;
    protected $params = [];

    public function __construct($uri)
    {

        $this->controller = Config::get("default_controller");
        $this->action = Config::get("default_action");

        $uri_parts = explode("?", $uri);


        $uri_first = $uri_parts[0];
        $uri_first = explode("/", $uri_first);
        if (count($uri_first)) {

            if (current($uri_first)) {
                $this->controller = current($uri_first);
                array_shift($uri_first);
            }


            if (current($uri_first)) {
                $this->action = current($uri_first);
                array_shift($uri_first);
            }


            $this->params = $uri_first;

        }
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }


}