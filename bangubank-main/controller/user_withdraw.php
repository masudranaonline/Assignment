<?php

    session_start();

    // if(!isset($_SESSION['user_id'])) {
    //     header("Location: ./login.php");
    // }

    $pdo = require_once "../model/database.php";
   
    if(isset($_POST['submit'])) {
        if($_POST['submit'] == 'withdraw_amount') {
            $amount = $_POST['amount'];
            $user_id = $_SESSION['user_id'];
            $date = date("Y-m-d h:i:s");

            try {
                
                
                $data = $pdo->prepare("INSERT INTO withdraw(user_id, amount, date) VALUES(?, ?, ?)");
                $result = $data->execute([$user_id, $amount, $date]);
                

                if($result) {
                    echo "withdraw successfully";
                     header('Location:../../customer/withdraw.php');

                }else {
                    echo "Deposit Failed";
                }
            } catch (\PDOException $e) {
                die("Database Error: {$e->getMessage()}");
                exit();
               
            }
        }
    }

    //Show withdraw  Transaction Information

    $user_id = $_SESSION['user_id'];

    $showWitdraw = $pdo->prepare("SELECT withdraw.*, users.name, users.email FROM withdraw LEFT JOIN users ON withdraw.user_id = users.id WHERE withdraw.user_id = ?");
    $showWitdraw->execute([$user_id]);
    $withdrawData = $showWitdraw->fetchAll();







?>