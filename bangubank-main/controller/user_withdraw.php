<?php

    session_start();

    if(!isset($_SESSION['user_id'])) {
        header("Location: ./login.php");
    }

    if(isset($_POST['submit'])) {
        if($_POST['submit'] == 'withdraw_amount') {
            $amount = $_POST['amount'];
            $user_id = $_SESSION['user_id'];
            $date = date("Y-m-d h:i:s");

            try {
                $pdo = require_once "../model/database.php";
                
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







?>