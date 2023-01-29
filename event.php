<?php 
class Event { 
public $eventid;

    public $eventname;
    public $description; 



    function _setid($eventid) {
        $this->eventid = $eventid;
    }

    function _getid() {
        return $this->eventid;
    }

    function _setname($eventname) {
        $this->eventname = $eventname;
    }

 function _getname() {
        return $this->eventname;
 }

function _setdescription($description) {
        $this->description = $description;
}

function _getdescription() {
        return $this->description;
}


function getFullEvent() {
        return "$this->eventid, $this->eventname, $this->description";
}



}



?>