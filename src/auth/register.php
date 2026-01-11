<?php

include '../database/database.php';
include '../services/userService.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name     = $_POST["name"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
    $role     = (int) $_POST["role"];


    $pdo = new Database();

    $user = new User($pdo);


    if ($user->register($name, $email, $password, $role)) {
        header("Location: ../../public/logine.html");
        exit;
    } else {
        echo "Erreur lors de l'inscription";
    }
}

