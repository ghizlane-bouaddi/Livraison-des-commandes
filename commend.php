<?php

class Commend{
    private int $id;
    private string $name;
    private string $status;
    private string $addrise;
    private int $clientId; 
    private int $livrerId=null;


    public function __construct($id,$name,$status,$addrise,$clientId,$livrerId){
        $this->id=$id;
        $this->name=$name;
        $this->status=$status;
        $this->addrise=$addrise;
        $this->clientId=$clientId;
        $this->livrerId=$livrerId;
    }
   
    public function getid(){
        return $this->id;
    }

    public function setid($id){
        return $this->id=$id;
    }

     public function getname(){
        return $this->name;
    }

    public function setname($name){
        return $this->name=$name;
    }


    public function getstatus(){
        return $this->status;
    }

    public function setstatus($status){
        return $this->status=$status;
    }


    public function getaddrise(){
        return $this->addrise;
    }

    public function setaddrise($addrise){
        return $this->addrise=$addrise;
    }

}

