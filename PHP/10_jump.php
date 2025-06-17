<?php
// in php as with other structural languages, you can jump
// to jump is to alter normal control flow of the loops.

// this can be used with any looping statement: while and for

// there are two jump statements:
// 1. break
// 2. continue

// break teminates the loop, the iteration is completed
// example:
for ($i=0; $i < 12; $i++) { 
    echo $i . "<br>";
    // normally, this would output the numbers 0 to 11 then terminate.
    // but we can terminate prematurely by adding the break statement:
    if ($i === 4) {
        break;
    }
    // this will now output 0 to 4 and end there
}

// continue is used to skip the remaining statements in the current iteration and the loop continues with the next iteration
// example
$i = 1;
while ($i<10) {
    echo $i . "<br>";
    $i++;
    // this should print 1 to 9
    // what if we add a continue statement rn?
    if ($i == 5) {
        continue;
    }
    // nothing happens, the printing and incrementals were done before the continue statement and there was nothing left in the current iteration to run for it to skip over
}

// lets do that again, shall we?
$j = 0;
while ($j<10) {
    if ($j == 5) {
        continue;
    }
    echo $j . "<br>";
    $j++;    
}
// seems the browser cant run the above, but it works perfectly fine on the terminal
?>