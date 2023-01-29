<?php 

class Seat { 

public $seatid;

    public $seatcode; 



    function _setid($seatid) {
        $this->seatid = $seatid;
    }

    function _getid() {
        return $this->seatid;
    }

    function _setcode($seatcode) {
        $this->seatcode = $seatcode;
    }

    function _getcode() {
        return $this->seatcode;
    }

    function getFullSeat() {
        return "$this->seatid,$this->seatcode";
    }


}



?>