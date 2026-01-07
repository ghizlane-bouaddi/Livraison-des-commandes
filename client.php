<?php

class Client {
    private int $id;
    private string $name;
    private string $email;

    private $commend_id =[];

    public function __construct($id,$name,$email,$commend_id){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->commend_id=$commend_id;
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

    public function  setname($name){
        return $this->name=$name;
    }

    public function getemail(){
        return $this->email;
    }

    public function setemail($email){
        return $this->email=$email;
    }

    public function getcommend_id(){
        return $this->commend_id;
    }

    public function setcommend_id($commend_id){
        return $this->commend_id=$commend_id;
    }
}

