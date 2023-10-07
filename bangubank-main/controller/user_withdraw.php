<?php

    session_start();

    if(!isset($_SESSION['user_id'])) {
        header("Location: ./login.php");
    }

    if(isset($_POST['submit'])) {
        if($_POST['submit'] == 'withdraw_amount') {
            $amount = $_POST['amount'];

            $name = $_SESSION['user_name'];
            $email = $_SESSION['user_email'];
            $date = date("Y-m-d h:i:s");

            try {
                $pdo = require_once "../model/database.php";

                $data = $pdo->prepare("INSERT INTO withdraw(name, email, amount, date) VALUES(?, ?, ?, ?)");
                $result = $data->execute([$name, $email, $amount, $date]);
                

                if($result) {
                    // header("Location:../customer/withdraw.php");
                    echo "withdraw successfully";
                    header('Location:../customer/withdraw.php');
                    // header('Location:../customer/deposit.php');
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