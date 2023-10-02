<?php namespace App\Models;

class Deposit{
    public function save(array $depositData){
        // $amount = $amount."\n";
        file_put_contents('./data/Deposit.txt', serialize($depositData), FILE_APPEND);
        return true;
    }

    public function fetch(): array {
        $deposit = [];
        $lines = file('./data/Deposit.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach($lines as $line) {
            $deposit[] = unserialize($line);
        }
        return $deposit;
    }
}