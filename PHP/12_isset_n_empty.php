<?php
    // isset and empty, used to figure out if html elements were filled in or intereacted with
    // isset() returns true if a variable is declared and not null
    // empty() return true if a variable is not declared, null, false, ""

    // example
    $userName = null;
    echo isset($userName); // returns false/0/""
    echo empty($userName); // returns true/1

    $userName = "Kahutia Te Rangi";
    if (isset($userName)) {
        echo "the vaiable IS set!"; // this is executed
    }
    else{
        echo "The variable IS NOT set!";
    }

    $name = "";
    if(empty($name)){
        echo "The variable IS empty";
    }
    else{
        echo "The varianle IS NOT empty";
    }
?>

<!--Lets do a technical example on this-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset and Empty methods</title>
</head>
<body>
    <br>
    <form action="" method="post">
        <label for="username">Username:</label> 
        <input type="text" name="username" id="username"> <br>
        <label for="password">Password:</label> 
        <input type="text" name="password" id="password"> <br>
        <input type="submit" value="submit"> <br>
    </form>
</body>
</html>

<?php

// first, we check if the user has pressed the submit button
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo "You have pressed the submit button";
}
?>