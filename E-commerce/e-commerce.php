<?php

include('E-commerce.php');

$user = new members('Akash', 'akash18rayhan@gmail.com','Paid');

echo $user->visitorInform();

if($user->paymentChecker() == true){
    echo "payment is done\n";
}
else{
    echo "please pay\n";
}


?>