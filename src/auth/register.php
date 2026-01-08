<?php

include '../database/database.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $pdo = Database::getpdo();

    $sql = "INSERT INTO users (name, email, password, rele_id)
            VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $hashedPassword, $role]);

    header("Location: ../../public/logine.html");
    exit;
}
