<?php

session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location:./login.php");
}
$pdo = require_once "../model/database.php";

if(isset($_POST['submit'])) {
    if($_POST['submit'] == 'transfer_amount') {
        $amount = $_POST['amount'];
        $to_account = $_POST['transfer_email'];

        $user_id = $_SESSION['user_id'];
        $from_account = $_SESSION['user_email'];
        $date = date("Y-m-d h:i:s");

        try {
            

            // transfer query
            $data = $pdo->prepare("INSERT INTO transfer(user_id, from_account, to_account, amount, date) VALUES(?, ?, ?, ?, ?)");
            $result = $data->execute([$user_id, $from_account, $to_account, $amount, $date]);

            // transfer deposit from account
            $query = $pdo->prepare("SELECT id FROM users where email = ?");
            $query->execute([$to_account]);
            $user = $query->fetch();
            // var_dump($user['id']);
            $data = $pdo->prepare("INSERT INTO deposit(user_id, amount, date) VALUES(?, ?, ?)");
            $result = $data->execute([$user['id'], $amount, $date]);
            
            //transfer withdraw from account
            $data = $pdo->prepare("INSERT INTO withdraw(user_id, amount, date) VALUES(?, ?, ?)");
            $result = $data->execute([$user_id, $amount, $date]);

            if($result) {
                echo "Balance Transfer Successfully";
                header("Location:../../customer/transfer.php");
            }else {
                echo "Balance Transfer Failed";
            }
        } catch (\PDOException $e) {
            die("Database Error: {$e->getMessage()}");
        }
    }
}

$user_id = $_SESSION['user_id'];
$showtransfer = $pdo->prepare("SELECT transfer.*, users.name FROM transfer LEFT JOIN users ON transfer.user_id = users.id WHERE transfer.user_id = $user_id");
$showtransfer->execute();
$transferData = $showtransfer->fetchAll();








?>