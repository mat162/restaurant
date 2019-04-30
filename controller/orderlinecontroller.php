<?php

class OrderlineController extends Controller{

    public function creationPanier(){
        
        $idProduit = $this->getParams()[0];
        
        if (!isset($_SESSION['panier'])){
            $_SESSION['panier'] = [];
            
        }
        array_push( $_SESSION['panier'], $idProduit);   

        $db = $this->db;
        $stm = $db->se_connecter();
        $this->data['plats'] = [];
        foreach($_SESSION['panier'] as $id){
            $req = $stm->prepare("SELECT * FROM meal WHERE id = ?");
            $req->execute([$id]);
            $result = $req->fetch();
            array_push($this->data['plats'], $result);
        }
                
   }

   public function supprimer()
   {
    $_SESSION['panier'] = [];
       
   }

}    