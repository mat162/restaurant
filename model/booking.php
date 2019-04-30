<?php

class Booking{

    private $Id;
    private $BookingDate;
    private $BookingTime;
    private $NumberOfSeats;
    private $User_Id;
    private $CreationTimestamp;

    public function __construct() {

        $this->CreationTimestamp = date("Y-m-d H:i:s");
    }
   
    public function getId() {

        return $this->Id;
    }

    public function setId($Id) {

        $this->Id = $Id;
    }

    public function getBookingDate() {

        return $this->BookingDate;
    }

    public function setBookingDate($BookingDate) {

        $this->BookingDate = $BookingDate;
    }

    public function getBookingTime() {

        return $this->BookingTime;
    }

    public function setBookingTime($BookingTime) {

        $this->BookingTime = $BookingTime;
    }

    public function getNumberOfSeats() {

        return $this->NumberOfSeats;
    }

    public function setNumberOfSeats($NumberOfSeats) {

        $this->NumberOfSeats = $NumberOfSeats;
    }

    public function getUser_Id() {

        return $this->User_Id;
    }

    public function setUser_Id($User_Id) {

        $this->User_Id = $User_Id;
    }

    public function getCreationTimestamp() {

        return $this->CreationTimestamp;
    }

    public function setCreationTimestamp($CreationTimestamp) {

        $this->CreationTimestamp = $CreationTimestamp;
    }

    public static function add($reservation) {
        
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=restaurant", Config::get('db_user'), Config::get('db_pwd'));
                           
        } catch (Exception $e) {
            $e->getMessage();            
        }

        $result = $bdd->prepare("INSERT INTO booking (BookingDate, BookingTime, NumberOfSeats, User_Id, CreationTimestamp) VALUES (?, ?, ?, ?, ?)");
        $result->execute([  $reservation->getBookingDate(), 
                            $reservation->getBookingTime(), 
                            $reservation->getNumberOfSeats(), 
                            22, 
                            $reservation->getCreationTimestamp()
        ]); 
    }
}