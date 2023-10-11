<?php

    if(isset($_POST['submit'])) {
        if($_POST['submit'] == 'AddCustomer') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $date = date("Y-m-d h:i:s");


            try {
                $pdo = require_once "../model/database.php";

                $data = $pdo->prepare("INSERT INTO users (name, email, password) VALUES(?, ?, ?)");
                $result = $data->execute([$name, $email, $password]);

                if($result) {
                   header("Location: ../admin/add_customer.php");
                }else {
                    echo "Something went wrong";
                }

            } catch (\PDOException $e) {
                die("Database Error: {$e->getMessage()}");
            }
        }
    }

