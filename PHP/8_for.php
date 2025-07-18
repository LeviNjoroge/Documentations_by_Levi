<?php
// for loops
// here we repeat a block of code a certain amount of times

//syntax
/*
for ($i=0; $i < ; $i++) { 
    # code...
}
*/

// within the parenthesis following the for clause, the statements are as follows:
// (counter initialization; condition[run as long as...]; counter increment)
// this is simply to mention the number of times the for loop will run

// example, to output the first 10 numbers;
for($i = 1; $i <= 10; $i++){
    echo "{$i}<br>";
}

// more about the for loop coming up soon when we'll be talking about arrays.
?>