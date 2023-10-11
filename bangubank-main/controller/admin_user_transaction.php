<?php

$pdo = require_once __DIR__ ."/../controller/admin_user_transaction.php";
$email = 

$showQuery = $pdo->prepare("SELECT users.*, deposit.amount, deposit.date FROM users LEFT JOIN deposit ON users.id = deposit.user_id WHERE users.email = $email");
$showQuery->execute();
$transactionData = $showQuery->fetchAll();

if($transactionData) {
    header("Location: ../admin/transactions.php");
}else {
    echo "Something went wrong!";
}


?>