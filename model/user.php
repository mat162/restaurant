<?php

class User{

    private $Id;
    private $FirstName;
    private $LastName;
    private $Email;
    private $Password;
    private $BirthDate;
    private $Address;
    private $City;
    private $ZipCode;
    private $Country;
    private $Phone;
    private $CreationTimestamp;
    private $LastLoginTimestamp;
    private $Admin;

    public function __construct(){

        $this->CreationTimestamp = date("Y-m-d H:i:s");
    }
   
    public function getId() {
       
        return $this->Id;
    }

    public function setId($Id) {

        $this->Id = $Id;
    }

    public function getFirstName() {

        return $this->FirstName;
    }

    public function setFirstName($FirstName) {

        $this->FirstName = $FirstName;
    }

    public function getLastName() {

        return $this->LastName;
    }

    public function setLastName($LastName) {

        $this->LastName = $LastName;
    }

    public function getEmail() {

        return $this->Email;
    }

    public function setEmail($Email) {

        $this->Email = $Email;
    }

    public function getPassword() {

        return $this->Password;
    }

    public function setPassword($Password) {

        $this->Password = $Password;
    }

    public function getBirthDate() {

        return $this->BirthDate;
    }

    public function setBirthDate($BirthDate) {

        $this->BirthDate = $BirthDate;
    }

    public function getAddress() {

        return $this->Address;
    }

    public function setAddress($Address) {

        $this->Address = $Address;
    }

    public function getCity() {

        return $this->City;
    }

    public function setCity($City) {

        $this->City = $City;
    }

    public function getZipCode() {

        return $this->ZipCode;
    }

    public function setZipCode($ZipCode) {

        $this->ZipCode = $ZipCode;
    }

    public function getCountry() {

        return $this->Country;
    }

    public function setCountry($Country) {

        $this->Country = $Country;
    }

    public function getPhone() {

        return $this->Phone;
    }

    public function setPhone($Phone) {

        $this->Phone = $Phone;
    }

    public function getCreationTimestamp() {

        return $this->CreationTimestamp;
    }

    public function setCreationTimestamp($CreationTimestamp) {

        $this->CreationTimestamp = $CreationTimestamp;
    }

    public function getLastLoginTimestamp() {

        return $this->LastLoginTimestamp;
    }

    public function setLastLoginTimestamp($LastLoginTimestamp) {

        $this->LastLoginTimestamp = $LastLoginTimestamp;
    }

    public function getAdmin() {

        return $this->Admin;
    }

    public function setAdmin($Admin) {

        $this->Admin = $Admin;
    }

    public static function utilisateur($user){

        try {
            $bdd = new PDO("mysql:host=localhost;dbname=restaurant", Config::get('db_user'), Config::get('db_pwd'));
                           
        } catch (Exception $e) {
            $e->getMessage();            
        }

        $result = $bdd->prepare("INSERT INTO user (FirstName, LastName, Email, Password, BirthDate, Address, City, ZipCode, Country, Phone, CreationTimestamp, Admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $result->execute([  $user->getFirstName(), 
                            $user->getLastName(), 
                            $user->getEmail(), 
                            $user->getPassword(), 
                            $user->getBirthDate(), 
                            $user->getAddress(), 
                            $user->getCity(), 
                            $user->getZipCode(), 
                            $user->getCountry(), 
                            $user->getPhone(), 
                            $user->getCreationTimestamp(), 
                            0
        ]); 
    }    
}