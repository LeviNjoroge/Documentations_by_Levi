<?php
// while loops
// the while loop is used to execute some code infinitely as long as a condition is true

// syntax:
/*
while (condition) {
    # code...
}
*/

// NOTE: THE PROGRAM CAN RUN INFINITELY, if that is not your wish, you can add an increment to a counter and use it in the condition for it to have sth it can escape to

// example: to output the numbers 1 to 10
$i = 1;
while($i<=10){
    echo "{$i}<br>";
    $i++;
}

// do while is a variation of the while loop
// it executes some code at least once before cheking if the condition is true, and if so, it will continue to execute the code until the condition is false
// syntax:
/*
do {
    # code...
} while (condition);
*/

// example:
do {
    echo "my name is witi";
} while (false);

// this outputs the statement then since the condition is false, it will stop there
// if the statement were true, it would have continued to run infinitely
// if we had used while, the statement would not have even been displayed

// the concept of the while loop is very useful, think of the possibilities
?>