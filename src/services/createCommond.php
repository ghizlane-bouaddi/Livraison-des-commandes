<?php

require_once '../database/database.php';

class CreateCommond{
    private Database $pdo;

    public function __construct(Database $pdo)
    {
        $this->pdo = $pdo;
    }

    public function createCommond($name,$status,$addrise,$client_id){
        $stmt = $this->pdo->getpdo()->prepare("INSERT INTO commend (name,status,addrise,client_id) VALUES (?, ?,?,?)");
        $stmt->execute([$name,$status,$addrise,$client_id]);
    }

}
$conn =new Database();
$user =new CreateCommond($conn);
$user->createCommond('jqde','dhq','jhdqkdb',5);