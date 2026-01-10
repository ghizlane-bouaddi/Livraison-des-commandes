<?php
class CrudUser{
    function createUser(PDO $pdo, string $name, string $email, string $password): bool {
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$name, $email, $password]);
}

function getAllUsers(PDO $pdo): array {
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserById(PDO $pdo, int $id): array|false {
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// UPDATE
function updateUser(PDO $pdo, string $name, string $email, int $id): bool {
    $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$name, $email, $id]);
}

// DELETE
function deleteUser(PDO $pdo, int $id): bool {
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
}
