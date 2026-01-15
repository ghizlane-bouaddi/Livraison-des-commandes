<?php

include 'BaseModel.php';
class Notification{
      private int $id;
    private string $message;
    private string $date;
    private int $userId;

    public function __construct(int $id,string $message,string $date,int $userId){
       
        $this->id = $id;
        $this->message = $message;
        $this->date = $date;
        $this->userId = $userId;
    }

    public function getid(){
        return $this->id;
    }

    public function setid($id){
        $this->id=$id;
    }

    public function getmessage(){
        return $this->message;
    }

    public function setmessage($message){
        $this->message=$message;
    }

    public function getdate(){
        return $this->date;
    }

    public function setdate($date){
        $this->date=$date;
    }

    public function getuserId(){
        return $this->userId;
    }

    public function setuserId($userId){
        $this->userId=$userId;
    }

}