<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand">Admin Dashboard</span>
    <a href="login.html" class="btn btn-light btn-sm">Logout</a>
  </div>
</nav>

<div class="container mt-4">

<h5>Utilisateurs</h5>
<table class="table table-striped">
<tr>
<th>Nom</th>
<th>Email</th>
<th>Rôle</th>
<th>Action</th>
</tr>
<tr>
<td>Ali</td>
<td>ali@mail.com</td>
<td>Client</td>
<td>
<button class="btn btn-sm btn-warning">Changer rôle</button>
<button class="btn btn-sm btn-danger">Désactiver</button>
</td>
</tr>
</table>

<hr>

<h5>Statistiques</h5>
<div class="row text-center">
<div class="col-md-4">
  <div class="card p-3">Terminées<br><strong>25</strong></div>
</div>
<div class="col-md-4">
  <div class="card p-3">Annulées<br><strong>5</strong></div>
</div>
<div class="col-md-4">
  <div class="card p-3">En cours<br><strong>12</strong></div>
</div>
</div>

</div>
</body>
</html>
