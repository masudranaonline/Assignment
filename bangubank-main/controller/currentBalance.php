<?php

$pdo = require_once __DIR__ . '/../model/database.php';

$user_id = $_SESSION['user_id'];




$query = $pdo->prepare("SELECT SUM(amount) AS TotalDeposit FROM deposit WHERE user_id = ?");
$query->execute([ $_SESSION['user_id']]);
$deposit = $query->fetch();
// var_dump($deposit);

$query2 = $pdo->prepare("SELECT SUM(amount) as TotalWithdraw FROM withdraw WHERE user_id = ?");
$query2->execute([ $_SESSION['user_id']]);
$withdraw = $query2->fetch();
// var_dump($withdraw);


$currentBalance = $deposit['TotalDeposit'] - $withdraw['TotalWithdraw'];

// echo $currentBalance;
// 

   



?>