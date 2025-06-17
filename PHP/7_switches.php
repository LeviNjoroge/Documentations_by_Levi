<?php
// switch
// this is a replacement to using many else if statements, 
// they are efficient are use less code 

// how it works is:
// a value is entered and for a case where the case value = the value entered previously, 
// a block of code is executed and a "break" statement terminates that execution from overflowing into the rest of the cases
// if none of the cases have the value, the code in the default clause is run


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

// let us look at an example
// in this example, we will be asking for user input for grade and then output a message corresponding to the grade entered
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case statements</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="grade" id="grade" placeholder="Enter a grade:"> <br>
        <input type="submit" value="Submit"> <br>
    </form>
</body>
</html>

<?php
$grade = $_GET["grade"];
$message = null;
switch($grade){
    case "A":
        $message = "Brilliant work!";
        break;
    case "B":
        $message = "Great work!";
        break;
    case "C":
        $message = "Good work";
        break;
    case "D":
        $message = "You passed!";
        break;
    case "F":
        $message = "You failed, will have to do a retake!";
        break;
    case "I":
        $message = "You have an incomplete mark!";
        break;
    default:
        $message = "Invalid input, try again!";
        break;
}

echo "{$message} <br>";
?>