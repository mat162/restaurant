<?php

class Db_Connexion
{

    private $db_host;
    private $db_name;
    private $db_pwd;
    private $db_user;
    private $bdd;
    
    //se connecter à la base
    public function se_connecter()
    {
        if($this->bdd === null)
        {
            $bdd = new PDO("mysql:host=".Config::get("db_host").";dbname=".Config::get("db_name").";charset=utf8", Config::get("db_user"), Config::get("db_pwd"));
            $this->bdd = $bdd;
        }
       
        return $this->bdd;
    }
   
    // Créer la fonction qui simplifie l'exécution de la requete et retourne le résultat

    public function requete($requete, $data, $class, $one= true)
    {
        $bdd = $this->se_connecter();
        $req = $bdd->prepare($requete);
        $req->execute($data);
        $req->setFetchMode(PDO::FETCH_CLASS,  $class);
        if($one)
        {
            $result  = $req->fetch();
        }else{
            $result  = $req->fetchAll();
        }
        
        return $result;
        
    }
    public function add_drop($requete,$data){
        $bdd = $this->se_connecter();
        $req = $bdd->prepare($requete);
        $req->execute($data);
    }

}