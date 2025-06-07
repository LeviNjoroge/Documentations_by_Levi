<?php
    // in PHP we have many categories of operators, including but not limited to:
    // arithmetic: +, -, *, /, %, **
    $x = 6;
    $y = 7;

    echo $x + $y."<br>"; // sum/addition
    echo $x - $y."<br>"; // subtraction
    echo $x * $y."<br>"; // multiplication
    echo $x / $y."<br>"; // division
    echo $x % $y."<br>"; // modulo
    echo $x ** 2,"<br>"; // exponential

    // assignment operators: =, +=, -=, *=, /=, %=
    echo "assignment operators","<br>";
    echo $marks = 80,"<br>"; // assigns the value 80 to the var "marks"
    echo $marks += 2,"<br>"; // adds 2 to the initial value contained in "marks" and reassigns the sum to the var
    echo $marks -= 5,"<br>"; // subtracts 5 from the value in "marks" and assigns the new value to the var
    echo $marks *= 10,"<br>"; // muliplies value by 10 then reassigns to var
    echo $marks /= 4,"<br>"; // divides by number then reassigns
    echo $marks %= 7,"<br>"; // gives the remainder of the value

    // unary ops: ++, --

    // comparison ops:
    if(5 == 4){
        echo "5 is greater than 4!";
    }
    if(6 != 7){
        echo "6 is not equal to 7!";
    }
    if(4>3){
        echo "4 is greater than"
    }
?>