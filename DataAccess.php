<?php
$db_name = "db_k2024417";
$db_user = "k2024417";
$db_password = "pooyaiji"; 



$pdo = new PDO("mysql:host = localhost; db_name = $db_name", $db_user, $db_password); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

function getAllFilms() { 
    global $pdo; 
    $filmstatement = $pdo->prepare('SELECT * FROM MHC_FILM ORDER BY FILM_NAME ASC'); 
    $filmstatement->execute();
    $resultOne = $filmstatement->fetchAll(PDO::FETCH_CLASS, 'Film');
    return $resultOne;
}

function getAllEvents() {
    global $pdo;
    $eventstatement = $pdo->prepare('SELECT * FROM MHC_EVENT ORDER BY EVENT_NAME ASC;');
    $eventstatement->execute();
    $resultTwo = $eventstatement->fetchAll(PDO::FETCH_CLASS, 'Event');
    return $resultTwo;
}

function getOnefilmName($searchFilmName) {
    global $pdo;
    $onefilmstatement = $pdo->prepare('SELECT * FROM MHC_FILM WHERE NAME =?');
    $onefilmstatement->execute([$searchFilmName]);
    $oneresult = $onefilmstatement->fetchAll(PDO::FETCH_CLASS, 'Film');
    return $oneresult;
}

function addMember() {
    global $pdo; 
    $memberstatement = $pdo->prepare("INSERT INTO MHC_MEMBER(MEMBER_ID,FIRST_NAME,LAST_NAME,EMAIL_ADDRESS,
    PHONE_NO) VALUES(?,?,?,?,?)");
    $memberstatement->execute([]);
    
}

function addPayment() {
    global $pdo;
    $paystatement = $pdo->prepare("INSERT INTO MHC_PAYMENT(PAYMENT_ID,CARD_TYPE,CARDHOLDER_NAME,CARD_NUMBER,EXPIRY_DATE,CVV) VALUES (?,?,?,?,?,?)");
    $paystatement->execute([]); 
}


function getAllSeats($seatlayout) {
    global $pdo;
    $seatstatement = $pdo->prepare("SELECT * FROM MHC_SEAT ORDER BY SEAT_CODE ASC;");
    $seatstatement->execute([$seatlayout]);
    $resultThree = $seatstatement->fetchAll(PDO::FETCH_CLASS, 'Seat');
    return $resultThree;

}

function getFullTicket() {
    global $pdo; 
    $tickstatement = $pdo->prepare("SELECT * FROM MHC_TICKET");
    $tickstatement->execute(); 
    $tresult = $tickstatement->fetchAll(PDO::FETCH_CLASS,'Ticket');
    return $tresult;
}

function getFullRoom() { 
    global $pdo; 
    $roomstatement = $pdo->prepare("SELECT * FROM MHC_TICKET"); 
    $roomstatement->execute(); 
    $resultFour = $roomstatement->fetchAll(PDO::FETCH_CLASS,'Room'); 
    return $resultFour; 
}

function getFullReciept() { 
    global $pdo;
    $recstatement = $pdo->prepare("SELECT * FROM MHC_RECIEPT WHERE RECIEPT_ID=?");
    $recstatement->execute();
    $resultFive = $recstatement->fetch(PDO::FETCH_CLASS, 'Receipt');
    return $resultFive;
}





?>