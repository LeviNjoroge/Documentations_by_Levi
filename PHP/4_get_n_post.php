<?php
    // $_GET and $_POST are super variables used to store data as it is passed from forms --- collect form data
    // to use them, use the subsequent methods in the forms using HTML, 
    // and the values you are passing will be stored as items in an array

    // these two methods might seem the same but then the difference comes
    // from the way they pass data

    // $_GET 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET and $_POST</title>
</head>
<body>
    <div class="$_GET">
        <form action="" method="get">
            <input type="text" name="name" id="name"> <br>
            <input type="text" name="email" id="email"> <br>
            <textarea name="message" id="message"></textarea> <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>