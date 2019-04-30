<?php

class UserController extends Controller{

    public function login(){
        
        if(isset($_POST["submit"])){
       
        $mail = $_POST["Email"];
        $pwd = $_POST["pwd"];

        $db = $this->db;
        $stm = $db->se_connecter();
        $req = $stm->prepare("SELECT * FROM user WHERE Email LIKE ?");
        $req->execute([$mail]);
        $user = $req->fetch();

            if(password_verify($pwd, $user['Password'])){
                
                $_SESSION['logged'] = true;
                $_SESSION['user'] = $mail['Email'];  
                $req1 = $stm->prepare("UPDATE `user` SET `LastLoginTimestamp` = ? WHERE `user`.`Id` = ?");
                $req1->execute([date('Y-m-d H:i:s'), $user['id']]);              
            }
        }
    }

    public function register(){
      
        if(isset($_POST['submit'])){
            
            $user = new User();
            $user->setFirstName($_POST['FirstName']);
            $user->setLastName($_POST['LastName']);
            $user->setEmail($_POST['Email']);
            $user->setPassword(password_hash($_POST['Password'], PASSWORD_BCRYPT));
            $user->setBirthDate(date("Y-m-d", strtotime($_POST['BirthDate'])));
            $user->setAddress($_POST['Address']);
            $user->setCity($_POST['City']);
            $user->setZipCode($_POST['ZipCode']);
            $user->setCountry($_POST['Country']);
            $user->setPhone($_POST['Phone']);
            

            User::utilisateur($user);

    }
}

}