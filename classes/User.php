<?php

class User {

    public $name;
    public $lastName;
    protected $email;

    public function __construct($name, $lastName, $email) {
        
        $this -> name = $name;
        $this -> lastName = $lastName;
        $this -> setEmail($email);

    }
    

    public function setEmail($email) {

        if (strpos($email, '@') !== false && strpos($email, '.') !==false) {
            return $this -> email = $email;
        } else {
            echo 'Inserisci un\'e-mail valida';
        }

    }


    public function getEmail($email) {

        $this -> email = $email;

    }

}

?>