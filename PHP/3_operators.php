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

    // comparison ops: return a boolean
    $num1 = 9;
    $num2 = 8;

    $num1 == $num2; // false: equal to
    $num1 != $num2; // true: not equal to 
    $num1 >= $num2; // true: greater than of equal to
    $num1 <= $num2; // false: less than or equal to
    $num1 === 18/2; // identical to (value and type)
    $num1 !== $num2; // true: not identical
    $num1 > $num2; // greater than
    $num1 < $num2; // lesser than

    // logical operators: combine more than one comparison
    $num1 != $num2 && $num1 >= $num2; //true //AND: both options are true
    $num1 != $num2 || $num1 <= $num2; //true //OR: one of the options is true
    $num1 > $num2; //false //NOT: just negates the statement

    //string operations: use . for string concatenation
    echo "I AM "."HIM"."<br>"; // adds two strings together
    $greetings = "Hello!";
    $greetings .= " How can I help you today?"."<br>"; // adds the string in the variable to the new one and stores the result back in the var
    echo $greetings;
    //apparently, a comma can also be used tho it is recommended to use the period

    // array operators: 
    // + union, == equality, != inequality, === identity, !== non identity
?>