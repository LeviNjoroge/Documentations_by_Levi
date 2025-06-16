<?php
// with the guidance of "Bro Code", the youtube channel (which if you haven't discovered it yet then my advice to you is to enrol to the Youtube university soonest!! -- coz you are missing out bro! ), 
// I will be getting user input and then perform some math on that
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
    <form action="5_math.php" method="get">
        <input type="text" name="num1" id="num1" placeholder="Input a number... "> <br>
        <input type="text" name="num2" id="num2" placeholder="Input another number... "> <br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    echo "absolute: " . abs($num1); // this returns the absolute value of a number
    echo "rounding: " . round($num1); // this rounds the decimal number
    echo "rounding down " . floor($num1); // this rounds the number down
    echo "round up " . ceil($num1);

    echo "power: " . pow($num1, $num2); // num1 to the power of num2
    echo "square root" . sqrt($num1);
    
    echo "max: " . max($num1, $num2); // maximum value
    echo "min " . min($num1, $num2);

    echo pi(); // outputs 10 digits of pi

    echo rand(); // outputs a random number
?>