<?php
// switch
// this is a replacement to using many else if statements, 
// they are efficient are use less code 

// how it works is:
// a value is entered and for a case where the case value = the value entered previously, 
// a block of code is executed and a "break" statement terminates that execution from overflowing into the rest of the cases
// if none of the cases have the value 


// syntax:
/*
switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}
*/

//example:
$grade = 'C';

?>