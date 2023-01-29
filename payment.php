<?php
class Payment { 
    public $paymentid;
    public $cardtype;
    public $cardholdername;
    public $cardno;
    public $expirydate;
    public $cvv; 



   function _setpaymentid($paymentid) {
        $this->paymentid = $paymentid;
   }
   function _setcardtype($cardtype) {
        $this->cardtype = $cardtype;
}
function _setcardholdername($cardholdername) {
    $this->cardholdername = $cardholdername;
}
function _setcardno($cardno) {
    $this->cardno = $cardno;
}
function _setexpirydate($expirydate) {
    $this->expirydate = $expirydate;
}
function _setcvv($cvv) {
    $this->cvv = $cvv;
}



}




?>