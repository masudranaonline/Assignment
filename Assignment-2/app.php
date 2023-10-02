#! D:\xampp\php\php.exe
<?php

    require_once 'classes/Income.php';
    require_once 'classes/Expense.php';


    while(true) {
        showOption();
        $choice = (int) readline("Please select an option: ");

        switch($choice) {
            case 1:
                addIncome();
                break;
            case 2:
                addExpense();
                break;
            case 3:
                viewIncome();
                break;
            case 4:
                viewExpense();
                break;
            case 5:
                viewSaving();
                break;
            case 0:
                exit(0);
            default:
                print "Invalid Option. Please select correct option\n";
        }
    }

    function showOption() {
        print "Select Option: \n";
        print "1 - Add Income\n";
        print "2 - Add Expense\n";
        print "3 - View Income\n";
        print "4 - View Expense\n";
        print "5 - View Saving\n";
        print "0 - Exit\n";
    }

    function addIncome() {
        $input = readline("Enter Income (Format:: Category - Income): ");
        $obj = new Income();
        $obj->store($input);
        
    }
    function addExpense() {
        $input = readline("Enter Expense (Format:: Category - Expense): ");
        $obj = new Expense();
        $obj->store($input);
    }
    function viewIncome() {
        $obj = new Income();
        $incomes = $obj->viewIncome();
        $totalIncome = $obj->totalIncome();
        
        print "-------------------------------\n";
        foreach($incomes as $income) {
            print $income.PHP_EOL;
        }
        print "-------------------\n";
        print "Total Income: {$totalIncome}\n";
        print "-------------------------------\n";
    }
    function viewExpense() {
        $obj = new Expense();
        $expenses = $obj->viewExpense();
        $totalExpense = $obj->totalExpense();
        
        print "-------------------------------\n";
        foreach($expenses as $expense) {
            print $expense.PHP_EOL;
        }
        print "-------------------\n";
        print "Total Expense: {$totalExpense}\n";
        print "-------------------------------\n";
    }
    function viewSaving() {
        $objIncome = new Income();
        $objExpense = new Expense();

        $totalIncome = $objIncome->totalIncome();
        $totalExpense = $objExpense->totalExpense();

        $saving = $totalIncome - $totalExpense;

        print "-------------------------------\n";
        print "Total Saving: {$saving}\n";
        print "-------------------------------\n";
    }
