<?php
session_start();

require_once '../src/database/database.php';
require_once '../src/models/commend.php'; 
echo '<pre>';
var_dump($_POST);
echo '</pre>';
if (!empty($_POST)) {
  $name =$_POST['name'];
  $status =$_POST['status'];
  $address = $_POST['address'];
   
   var_dump($name);
 

    $pdo = new Database();
    $auth = new createCommond($pdo);

}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard Client</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <span class="navbar-brand">Client Dashboard</span>
    <a href="login.html" class="btn btn-light btn-sm">Logout</a>
  </div>
</nav>

<div class="container mt-4">

<!-- Create Order -->
<div class="card mb-4">
  <form action="./cliente.php" method="POST">  <!-- form start -->
    <div class="card-header bg-success text-white">Créer une commande</div>
    <div class="card-body">
      <input class="form-control mb-2" name="name" placeholder="name" required>
      <input class="form-control mb-2" name="status" placeholder="status" required>
      <input class="form-control mb-2" name="address" placeholder="Adresse de livraison" required>

      <button type="submit" name="create_commande" class="btn btn-success w-100">Envoyer</button>
    </div>
  </form>
</div>


<!-- Orders -->
<h5>Mes commandes</h5>
<div class="row g-3">

<div class="col-md-4">
  <div class="card border-info">
    <div class="card-body">
      <h6>Commande #201</h6>
      <p><i class="bi bi-geo-alt"></i> Casablanca</p>
      <span class="badge bg-warning">En attente</span>
      <div class="mt-2">
        <button class="btn btn-sm btn-primary w-100 mb-1">Voir offres</button>
        <button class="btn btn-sm btn-danger w-100">Annuler</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>

</body>
</html>
