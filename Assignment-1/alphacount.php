#! D:\xampp\php\php.exe
<?php


    $userInput = readline("Enter Sentence: ");


    $count = 0;
    $length = strlen($userInput);

    for ($i = 0; $i < $length; $i++) {
        if(ctype_alpha($userInput[$i])) {
            $count++;
        }
    }
    print "Total Alphabet Character is: ".$count;

