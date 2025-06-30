<?php
// functions
// a function is described as a piece of code that performs a perticular task, 
// can be reused as many times as one would wish just by calling the function
// syntax:
/*
function FunctionName( #parameters) : Returntype {
    # code
}
*/
// to call the created function:
// FunctionName(#arguments);
// example: (a function to add two numbers)
function add($num1, $num2) : float{
    $sum = $num1 + $num2;
    return $sum;
} // creating the function

echo add(4.4,3) . "\n"; // calling the function
echo add(5,21) . "\n";

// example2: (a function to find the hypotenuse of a right angled triangle)
function hypotenuse($x, $y){
    return round(sqrt(($x**2)+($y**2)), 2);
}
echo hypotenuse(1,1)  . "\n";
?>

<?php
echo "<br>";
// sth drawing my attention:
function square($num){
    $result = $num * $num;
    echo "the answer is " . $result . "<br>";
}
$x = 6;
$answer = square($x);
echo $answer;

function square1(&$num){
    $result = $num * $num;
    echo "the second answer is " . $result . "<br>";
}
$y = 6;
$answer = square1($y);
echo $answer;
?>