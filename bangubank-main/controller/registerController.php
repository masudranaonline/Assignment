<?php

    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die("Methos not accepted. Accepted methods are POST");
        exit();
    }

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        try {
            $pdo = require_once "../model/database.php";

            $data = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $result = $data->execute([$name, $email, $password]);

            if($result) { ?>
                <script>
                    alert("Registers successfully")
                </script>
              <?php 
              header("Location:../login.php");
            }else {
                echo "Registers failed";
            }
        } catch (\PDOException $e) {
            die("Database error: {$e->getMessage()}");
        }
    }
    else {
        die("Name, Email & Password is required");
        exit();
    }



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    // print_r($_POST);


