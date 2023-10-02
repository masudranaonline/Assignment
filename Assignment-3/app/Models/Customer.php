<?php namespace App\Models;

class Customer{

    public function save(array $data){
        file_put_contents('./data/Customer.txt', serialize($data), FILE_APPEND);
        return true;
    }

    public function login(string $email, string $password): bool{
        return true;

       

    }
}