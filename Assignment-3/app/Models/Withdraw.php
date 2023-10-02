<?php namespace App\Models;

class Withdraw{
    
    public function save(array $withdrawData) {


        file_put_contents('./data/Withdraw.txt', serialize($withdrawData), FILE_APPEND);
        return true;
    }
}