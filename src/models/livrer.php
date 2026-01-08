<?php 
include 'user.php';

class Livrer extends User{
    public function __construct($id,$name,$email,$password){
        parent::__construct($id,$name,$email,$password,2);
    }
    
     public function peutProposerOffre(): bool {
        return true;
    }

}

