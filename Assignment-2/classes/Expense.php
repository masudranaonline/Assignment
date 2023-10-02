<?php

    class Expense {
        public function store(string $input): void {
            $input = $input."\n";
            file_put_contents('./data/expense.txt', $input, FILE_APPEND);

        }


        public function viewExpense(): array {
            $expense = [];
            $lines = file('./data/expense.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($lines as $line) {
                $expense[] = $line;
            }
            return $expense;

        }

        public function totalExpense(): int {
            $totalExpense = 0;
            $lines = file('./data/expense.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($lines as $line) {
                $array = explode('-', $line);
                $totalExpense += (int) $array[1];
            }
            return $totalExpense;
        }
    }