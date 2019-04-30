<?php

class Controller
{
    protected $data;
    protected $model;
    protected $params;
    protected $db;

    public function getData()
    {
        return $this->data;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function getParams()
    {
        return $this->params;
    }

    function __construct( $data = [])
    {
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
        $this->db = new Db_Connexion();
       
    }
   
}