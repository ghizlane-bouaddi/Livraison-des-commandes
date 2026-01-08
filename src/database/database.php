<?php
class Database{

    private static ?PDO $conn = null;

    private function __construct(){}

    public static function getpdo():PDO{
        if(self::$conn == null){
            self::$conn = new PDO("mysql:host=localhost;dbname=delivery","root","",[
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
           
        }
        return self::$conn;
    }
}







