<?php
require_once '../database/database.php';

class User {

    private Database $pdo;
    public function __construct(Database $pdo)
    {
        $this->pdo = $pdo;
    }

    public function register(string $name, string $email, string $password, int $role): bool {

       
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password, rele_id)VALUES (?, ?, ?, ?)";

        $stmt = $this->pdo->getpdo()->prepare($sql);

        return $stmt->execute([$name,$email,$hashedPassword,$role]);
    }
}
