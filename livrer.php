<?php 

class Livrer{
    private int $id;
    private string $name;
    private $commend_id =[];

    public function __construct($id,$name,$commend_id){
        $this->id=$id;
        $this->name=$name;
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

    public function setname($name){
        return $this->name=$name;
    }

    public function getcommend_id(){
        return $this->commend_id;
    }

    public function setcommend_id($commend_id){
        return $this->commend_id=$commend_id;
    }

}

