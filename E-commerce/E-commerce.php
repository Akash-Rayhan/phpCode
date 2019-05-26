<?php
    class Visitors{

        public $name;
        public $email;


        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }
        

        public function visitorInform(){
            echo "the person is $this->name\n"."the email is$this->email\n";
        }
    }


    class members extends Visitors{
        protected $payment;

        public function __construct($name, $email, $payment){
            parent::__construct($name, $email);
            $this->payment = $payment;
        }

        public function paymentChecker(){
            if($this->payment == "Paid"){
                return true;
            }
            else {
                return false;
            }
        }
    }



?>