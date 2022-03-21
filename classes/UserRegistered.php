<?php 

require_once __DIR__ . '/User.php';


class UserRegistered extends User {

    private $discount = 20;

    public function getDiscount() {
        return $this -> discount;
    }

}

?>