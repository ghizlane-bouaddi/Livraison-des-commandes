<?php

class AuthService {
    private PDO $pdo;

 
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function login(string $email, string $password): bool
    {

        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);


        $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
        if ($user && password_verify($password, $user["password"])) {

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["rele_id"] = $user["rele_id"];

            return true; 
        }

        return false;
    }

    
    public function redirectByRole(): void
    {
        if ($_SESSION["rele_id"] == 1) {
            header("Location: ../../public/cliente.php");
        } elseif ($_SESSION["rele_id"] == 2) {
            header("Location: ../../public/livreure.php");
        } else {
            header("Location: ../../public/admine.php");
        }
        exit;
    }
}

