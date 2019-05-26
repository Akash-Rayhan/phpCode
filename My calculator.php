<?php
class MyCalculator{
    public $Number1;
    public $Number2;
      public function __construct($number1, $number2){
          $this-> Number1 = $number1;
          $this-> Number2 = $number2;
      }
      public function add(){
          return  $this -> Number1 + $this-> Number2;
      }
      public function multiply(){
          return  $this -> Number1 * $this->Number2;
      }    
}

$mycalc = new MyCalculator( 12, 6); 
echo $mycalc-> add().'<br>';  
echo $mycalc-> multiply(); 
?>


