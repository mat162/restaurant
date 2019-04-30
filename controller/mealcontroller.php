<?php

class Mealcontroller extends Controller{

    public function index(){

        $db = $this->db;
        $stm = $db->se_connecter();
        $req = $stm->prepare("SELECT * FROM meal");
        $req->execute();
        $result = $req->fetchAll();

        $this->data['meals'] = $result;
        
    }

    public function add(){

        if(isset($_POST['submit'])){

            $target_dir = "../public/img/";
            $target_file = $target_dir . basename($_FILES["Photo"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["Photo"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }

            $name = $_POST['Name'];
           
            $description = $_POST['Description'];
            $quantity = $_POST['QuantityInStock'];
            $buy = $_POST['BuyPrice'];
            $sale = $_POST['SalePrice'];
          
            $db = $this->db;
            $stm = $db->se_connecter();
            $req = $stm->prepare("INSERT INTO meal (Name, Photo, Description, QuantityInStock, BuyPrice, SalePrice) VALUES (?, ?, ?, ?, ?, ?)");
            $req->execute([$name, basename($_FILES["Photo"]["name"]), $description, $quantity, $buy, $sale]);
        
        }
    }

    public function show(){

        $params = $this->getParams();
        $id= $params[0];
        
        $db = $this->db;
        $stm = $db->se_connecter();
        $req = $stm->prepare("SELECT * FROM `meal` WHERE `Id` = ?");
        $req->execute([$id]);
        $result = $req->fetch();
        
        $this->data['meal'] = $result;
    }

}