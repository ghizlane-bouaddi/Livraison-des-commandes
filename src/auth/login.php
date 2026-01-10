<?php

session_start();

include "../database/database.php";
include "../services/AuthService.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];


    $pdo = Database::getpdo();

 
    $auth = new AuthService($pdo);

    if ($auth->login($email, $password)) {
        $auth->redirectByRole();
    } else {
        echo "Email ou mot de passe incorrect";
    }
}
