<?php

class CreditCard {

    protected $numberCard;
    protected $expirationMonth;
    protected $expirationYear;
    protected $cvv;



    public function getNumberCard() {

        return $this -> numberCard;

    }

    public function setNumberCard($numberCard) {

        if (is_numeric($numberCard) && strlen($numberCard) == 16 ) {
            $this -> numberCard = $numberCard;
        }

    }


    public function getExpirationMonth() {

        return $this->expirationMonth;

    }
    

    public function setExpirationMonth($number) {

        if (is_numeric($number) && $number >= 1 && $number <= 12) {
            $this->expirationMonth = $number;

        }
    }

    public function getExpirationYear() {

        return $this->expirationYear;

    }
    
    public function setExpirationYear($number) {

        if (is_numeric($number) && $number >= 0 && $number <= 99) {
            $this->expirationYear = $number;
        }

    }


    public function getCvv() {

        return $this -> cvv;

    }


    public function setCvv($cvv) {

        if (is_numeric($cvv) && strlen($cvv) == 3)
        $this -> cvv = $cvv;

    }


    public function getExpirationDate() {

        return $this -> expirationDate;

    }
}


?>