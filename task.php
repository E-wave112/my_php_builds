<?php 

#write a php function the generates 200 recharge cards for a telecommunication company
function generateCard($n){
    #create a random card string using the math function and then converting to string
    $randomstring = strval(rand(0,9)) . strval(rand(0,9)) . strval(rand(0,9)) . strval(rand(0,9)) . 
    strval(rand(0,9)) . strval(rand(0,9)) . strval(rand(0,9)) . strval(rand(0,9)) . 
    strval(rand(0,9)) . strval(rand(0,9));
    ##loop the random card generated a number of times.so that it creates new sets of recharge cards for every iteration
    for ($x = 100; $x <= $n+100; $x++) {
        ##echo your final answer
        echo nl2br("$randomstring$x$x \r\n");
      }
}

generateCard(200)

?>
