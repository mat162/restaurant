<?php

class BookingController extends Controller{
    
    public function tableBook(){

        if(isset($_POST['submit'])){

            $reservation = new Booking();
            $reservation->setBookingDate(date("Y-m-d", strtotime($_POST['BookingDate'])));
            $reservation->setBookingTime(date("H:i:s",strtotime($_POST['BookingTime'])));
            $reservation->setNumberOfSeats($_POST['NumberOfSeats']);
            
            Booking::add($reservation);
        }

    }

}
