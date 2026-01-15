<?php

include 'BaseModel.php';
class Offre{
    private int $id;
    private float $prix;
    private int $commend_id;
    private int $livrer_id;

    public function __construct($id,$prix,$commend_id,$livrer_id){
        
        $this->id=$id;
        $this->prix=$prix;
        $this->commend_id=$commend_id;
        $this->livrer_id =$livrer_id;
    }

    public function getid(){
        return $this->id;

    }

    public function  setid($id) {
         $this->id=$id;
    }

    public function getptix() {
        return $this->prix;
    }

    public function setprix($prix){
         $this->prix=$prix;
    }

    public function getcommend_id(){
        return $this->commend_id;
    }

    public function setcommend_id($commend_id){
        $this->commend_id=$commend_id;
    }

    public function getlivrer_id(){
        return $this->livrer_id;
    }

    public function setlivrer_id($livrer_id){
        $this->$livrer_id=$livrer_id;
    }



}