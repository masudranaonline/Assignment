<?php
// session_start();

$pdo = require_once __DIR__ . '/../model/database.php';

$user_id = $_SESSION['user_id'];




$query = $pdo->prepare("SELECT SUM(amount) AS TotalDeposit FROM deposit WHERE user_id = ?");
$query->execute([ $_SESSION['user_id']]);
$deposit = $query->fetch(PDO::FETCH_ASSOC);
// var_dump($deposit);



echo $deposit['TotalDeposit'];