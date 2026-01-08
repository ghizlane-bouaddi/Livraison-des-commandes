<?php

session_start();
include "../database/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $pdo = Database::getpdo();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["rele_id"] = $user["rele_id"];

        // var_dump($_SESSION["rele_id"]);

        // switch($_SESSION["rele_id"]){
        //     case 1:
        //          header("Location: ../../public/cliente.php");
        //          break;
        //     case 2:
        //         header("Location: ../../public/livreure.php");
        //         break;
        //     case 3:
        //         header("Location: admin.php");
        //         break;
        //     default:
        //         echo "Email ou mot de passe incorrect";
        // }
        if ($_SESSION["rele_id"] == 1) {
            header("Location: ../../public/cliente.php");
        } elseif ($_SESSION["rele_id"] == 2) {
            header("Location:  ../../public/livreure.php");
        } else {
            header("Location: ../../public\admine.php");
        }
    } else {
        echo "Email ou mot de passe incorrect";
    }
}
