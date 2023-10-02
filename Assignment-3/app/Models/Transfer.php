<?php namespace App\Models;

class Transfer{
    
    public function save(array $transferData) {


        file_put_contents('./data/Transfer.txt', serialize($transferData), FILE_APPEND);
        return true;

    }

    public function totalTransfer(): float {
        $totalTransfer = 0;
        $lines = file('data/Transfer.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach($lines as $line) {
            $array = explode('-', $line);
            $totalTransfer += (int) $array[1];
        }
        return $totalTransfer;
    }
}