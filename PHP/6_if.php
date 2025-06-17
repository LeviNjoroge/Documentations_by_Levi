<?php
// if statements
// performs sth if sth is true
// executes a block of code if the condition is true

// syntax:
/* 
    if(condition){
        // statements/block of code
    }
*/

// example:
if(7>6){
    echo "Did you know that 7 is greater than 6? Now you know!<br>";
}

// to add more conditions you can introduce the else and else if statements
// how these work is as follows:
// if a condition is true, the statements are executed and the whole if statement teminates
// if not true, if there is an else clause, the else part is executed
// if there is an if in the else clause, the condition in the if statement is checked and if true then that part is executed

// example:
$age = 8;
if($age >= 13 && $age <= 19){
    echo "You are a teenager!";
}
elseif ($age > 19) {
    echo "You are an adult!";
}
else{
    echo "You are a child";
}

//
?>