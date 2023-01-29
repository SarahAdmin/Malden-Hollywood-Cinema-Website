<?php 

class Room {
public $roomid; 
public $roomno; 
public $eventcode; 





function getFullRoom() { 
    return "$this->roomid, $this->roomno, $this->eventcode; "
}








}

?>


