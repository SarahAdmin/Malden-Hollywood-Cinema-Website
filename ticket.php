<?php 
class Ticket {

    public $ticketid;
    public $memberid;
    public $filmid;
    public $seatcode;




    function _getTicketId() {
        return $this->ticketid;
    }

    function getFullTicket() {
        return "$this->ticketid, $this->memberid, $this->filmid, $this->seatcode";
    }
}





?>