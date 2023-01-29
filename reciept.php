<?php 

class Receipt { 
    public $recieptid; 
    public $eventcode;
    public $ticketcode;
    public $paymentid;


    function getFullReceipt() {
        return "$this->recieptid,$this->eventcode,$this->ticketcode,$this->paymentid";
    }
}






















?> 