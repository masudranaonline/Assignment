<?php namespace App;

use App\Models\Customer;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Transfer;

class CLI{
    private string $customerEmail;

    private const LOGIN = 1;
    private const REGISTER = 2;   

    private const DEPOSIT = 1;
    private const WITHDRAW = 2;
    private const TRANSFER = 3;
    private const VIEW_BALANCE = 4;
    private const VIEW_WITHDRAW = 5;
    private const VIEW_TRANSFER = 6;

    private const EXIT = 0;

    private array $customerOptions = [
        self::DEPOSIT => 'Deposit',
        self::WITHDRAW => 'Withdraw',
        self::TRANSFER => 'Transfer Balance',
        self::VIEW_BALANCE => 'View Balance',
        self::VIEW_WITHDRAW => 'View Withdraw',
        self::VIEW_TRANSFER => 'View Transfer',
        self::EXIT => 'Exit'
    ];

    private array $options = [
        self::LOGIN => 'Login',
        self::REGISTER => 'Register',
        self::EXIT => 'Exit'
    ];

    

    public function start(){
        while(true){
            foreach($this->options as $key => $value){
                print $key.' - '.$value.PHP_EOL;
            }
            $choice = readline('Please select an option to continue: ');

            switch($choice){
                case self::LOGIN:
                    $this->login();
                    break;

                case self::REGISTER:
                    $this->register();
                    break;
                case self::EXIT:
                    exit(0);
                default:
                    print "Invalid Choice. Please select correct choice.".PHP_EOL;
                    break;
            }
        }
    }

    public function login(){
        

        while(true){
            $email = readline('Email:');
            if('' == $email){
                print "You must enter a valid email address".PHP_EOL;
            }
            else{
                break;
            }
        }

        while(true){
            $password = readline('Password:');
            if('' == $password){
                print "You can't set an empty password".PHP_EOL;
            }
            else{
                break;
            }
        }

        $customer = new Customer();
        if($customer->login($email, $password)){
            $this->customerEmail = $email;
            $this->customerOperation();
        }
        else{
            print "Invalid email address or password".PHP_EOL;
        }
    }

    public function register(){
        while(true){
            $name = readline('Name: ');
            if('' == $name){
                print "You must enter a name".PHP_EOL;
            }
            else{
                break;
            }
        }

        while(true){
            $email = readline('Email:');
            if('' == $email){
                print "You must enter a valid email address".PHP_EOL;
            }
            else{
                break;
            }
        }

        while(true){
            $password = readline('Password:');
            if('' == $password){
                print "You can't set an empty password".PHP_EOL;
            }
            else{
                break;
            }
        }

        $confirmPassword = readline('Confirm Password:');
        if($password != $confirmPassword){
            print "Password is incorrect".PHP_EOL;
        }


        $data = [
            'name' => $name,
            'email' => $email,
            'password' => md5($password)
        ];

        $customer = new Customer();
        if($customer->save($data)){
            print "User Created Successfully !".PHP_EOL;
        }
        else{
            print "Failed !".PHP_EOL;
        }


    }

    public function customerOperation(){
        while(true){
            foreach($this->customerOptions as $key => $value){
                print $key.' - '.$value.PHP_EOL;
            }
            $choice = readline('Please select a choice: ');

            switch ($choice) {
                case self::DEPOSIT:
                    $this->deposit();
                    break;
                case Self::WITHDRAW:
                    $this->withdraw();
                    break;
                case self::TRANSFER:
                    $this->transferBalance();
                    break;
                case self::VIEW_BALANCE:
                    $this->viewBalance();
                    break;
                case self::VIEW_WITHDRAW:
                    $this->viewWithdraw();
                    break;
                case self::VIEW_TRANSFER:
                    $this->viewTransfer();
                    break;
                case self::EXIT:
                    exit(0);
                default:
                    print "Invalid Choice. Please select right option.".PHP_EOL;
                    break;
            }
        }
    }

    public function deposit(){
        $amount = (string) readline("Enter Amount: ");

        $depositData = [
            'customerEmail' => $this->customerEmail,
            'amount' => $amount,
            'date' => date('d-M-y H:i:s'),
        ];

        $deposit = new Deposit();
        if($deposit->save( $depositData)) {
            print "Deposit Successful".PHP_EOL;
        }else {
            print "Deposit Failes !".PHP_EOL;
        }


    } 

    public function withdraw(){
        $amount = (string) readline("Enter amount: ");

        $withdrawData = [
            'customerEmail' => $this->customerEmail,
            'amount' => $amount,
            'date' => date('d-M-y H:i:s'),
        ];

        $withdraw = new Withdraw();
        if($withdraw->save($withdrawData)){
            print "Withdraw successfully !";
        }else {
            print "withdraw Failed !";
        }

    }

    public function transferBalance(){
        $transferEmail = (string) readline("Enter Transfer Email: ");
        $transferamount = (string) readline("Enter Transfer Amount: ");

        $transferData = [
            'customerEmail' => $this->customerEmail,
            'transferEmail' => $transferEmail,
            'transferAmount' => $transferamount,
            'date' => date('d-M-y H:i:s'),
        ];
        $transfer = new Transfer();
        if($transfer->save($transferData)) {
            print "Transfer Successful".PHP_EOL;
        }else {
            print "Transfer Failed".PHP_EOL;
        }
    }

    public function viewBalance(){
        $obj = new Deposit();
        $deposits = $obj->fetch();
        
        foreach($deposits as $depoist) {
            print $depoist['customerEmail']."\t".$depoist['amount']."\t".$depoist['date']."\n";
            // print $depoist.PHP_EOL;
        }
    }

    public function viewWithdraw(){

    }
    public function viewTransfer(){

    }


}