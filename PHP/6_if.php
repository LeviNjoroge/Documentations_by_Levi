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

// in the above example, the first condition is not met, the statement is ignored, 
// the event loop then checks for an else clause, 
// and it exists, having an if statement with it, the condition in it is also not met, 
// this checking through conditions will happen sequentially untill there is an else statement that is not conditional

// one final thing, lets observe sth:
$isAdult = true;
$marksMath = 80;
$marksEng = null;
$marksGeo = 0;

if($isAdult){
    echo "Suspect is an adult! <br>";
}

if($marksMath){
    echo "Suspect has his math results! <br>";
}

if($marksEng){
    echo "Suspect has his english results! <br>";
}

if($marksGeo){
    echo "Suspect has his geo results! <br>";
}

// from the output of the above code, you can note as follows:
// if a variable stores a boolean value, the variable can be used as a condition
// booleans store values as follows; false = 0, true = 1
// hence when a variable has 0 or null, then the boolean equivalent of it is false
// 1 or a higher number results in a true

// this can be used to test whether the variables have any values in store
?>