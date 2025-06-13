<?php
    // $_GET and $_POST are super variables used to store data as it is passed from forms --- collect form data
    // to use them, use the subsequent methods in the forms using HTML, 
    // and the values you are passing will be stored as items in an array

    // these two methods might seem the same but then the difference comes
    // from the way they pass data

    // Both GET and POST are treated as $_GET and $_POST. 
    // These are superglobals, which means that they are always accessible, regardless of scope - 
    // and you can access them from any function, class or file without having to do anything special.

    // $_GET is an array of variables passed to the current script via the URL parameters.

    // $_POST is an array of variables passed to the current script via the HTTP POST method.
    // hence more secure since the variables arent exposed in the url as is the case with the GET method
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
    <div class="POST">
        <form action="" method="post">
            <input type="text" name="fName" id="fName" placeholder="First Name..."> <br>
            <input type="text" name="lName" id="lName" placeholder=""> <br>

        </form>
    </div>
</body>
</html>