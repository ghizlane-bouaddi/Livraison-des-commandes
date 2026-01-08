<?php

include 'user.php';
class Client extends User{

    public function __construct($id,$name,$email,$password){
        parent::__construct($id, $name, $email, $password, 1);
    }


    
    public function peutCreerCommande(): bool {
        return true;
    }
}

