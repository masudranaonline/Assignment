<?php
session_start();

if(!isset($_SESSION['user_id'])){
  header("Location:./login.php");
}
// echo $_SESSION['user_id'];
$pdo = require_once "../model/database.php";
// var_dump($pdo);

    if(isset($_POST['submit'])) {
        if($_POST['submit'] == 'submitDeposit') {
            $amount = $_POST['amount'];

            $user_id = $_SESSION['user_id'];
            $date = date("Y-m-d h:i:sa");

            try {
                

              $data = $pdo->prepare("INSERT INTO deposit(user_id, amount, date) VALUES(?, ?, ?)");
              $result = $data->execute([$user_id, $amount, $date]);

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


    // Show Deposit Transaction

    $user_id = $_SESSION['user_id'];
    
    

      $showQuery = $pdo->prepare("SELECT deposit.*, users.name, users.email FROM deposit LEFT JOIN users ON deposit.user_id = users.id WHERE deposit.user_id = $user_id");
      $showQuery->execute();
      $depositData = $showQuery->fetchAll();

