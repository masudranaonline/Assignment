<?php

    

    class Income {

        public function store(string $input): void {
            $input = $input."\n";
            file_put_contents('./data/incomes.txt', $input, FILE_APPEND);
        }

        public function viewIncome(): array {
            $incomes = [];
            $lines = file('./data/incomes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($lines as $line) {
                $incomes[] = $line;
            }
            return $incomes;

        }

        public function totalIncome(): int {
            $totalIncome = 0;
            $lines = file('./data/incomes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($lines as $line) {
                $array = explode('-', $line);
                $totalIncome += (int) $array[1];
            }
            return $totalIncome;
        }


    }