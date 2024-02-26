<?php
    class Account 
    {
        public $accountNum;
        public $holder;
        public $c_balance;
        public $o_date;
        public $code;

        public function __construct($accountNum, $holder, $c_balance, $o_date, $code)
                {
                    $this->accountNum = $accountNum;
                    $this->holder = $holder;
                    $this->c_balance = $c_balance;
                    $this->o_date = $o_date;
                    $this->code = $code;
                }
        public function debit($amount) {
            $this->c_balance -= $amount;
        }
        public function credit($amount) {
            $this->c_balance += $amount;
        }
        public function current_balance() {
            echo "Holder : ".$this->holder;
            echo "Account number : ".$this->accountNum;
            echo "Balance : ".$this->c_balance;
        }
    }
?>