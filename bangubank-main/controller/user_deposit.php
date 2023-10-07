<?php
session_start();

if(!isset($_SESSION['user_id'])){
  header("Location:./login.php");
}

    if(isset($_POST['submit'])) {
        if($_POST['submit'] == 'submitDeposit') {
            $amount = $_POST['amount'];

            $name = $_SESSION['user_name'];
            $email = $_SESSION['user_email'];
            $date = date("Y-m-d h:i:sa");

            try {
                $pdo = require_once "../model/database.php";

              $data = $pdo->prepare("INSERT INTO deposit(name, email, amount, date) VALUES(?, ?, ?, ?)");
              $result = $data->execute([$name, $email, $amount, $date]);

              if($result) {
                header('Location:../customer/deposit.php');
              }else {
                echo "Deposit failed!";
              }


            } catch (\PDOException $e) {
              die("Database Error: ".$e->getMessage());
              exit();
            }             
        }
    }

