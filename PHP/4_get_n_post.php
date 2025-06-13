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

    // the data will be sent to the PHP file specified in the "action" attribute of the form html element
    // if no file is specified, the data will be sent to the same file, meaning on submit, the same file will reopen
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
            <input type="text" name="name" id="name" placeholder="Name: "> <br>
            <input type="text" name="email" id="email" placeholder="Email: "> <br>
            <textarea name="message" id="message" placeholder="Type your message..."></textarea> <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="POST">
        <form action="" method="post">
            <input type="text" name="fName" id="fName" placeholder="First Name:"> <br>
            <input type="text" name="lName" id="lName" placeholder="Last Name:"> <br>
            <input type="tel" name="phone" id="phone" placeholder="Phone number: "> <br>
            <input type="email" name="email" id="email" placeholder="Email..."> <br>
            <input type="password" name="password" id="password" placeholder="Password"> <br>
            <input type="submit" value="Submit"> <br>
        </form>
    </div>
</body>
</html>

<?php
// we can now get our values and store then in variables for later data manipulation
// like if we'll want to store them in databases

// for the GET method:
// since the get method is not secure, I used it to create a feedback form
{
    $name = $_GET["name"];
    $email = $_GET["email"];
    $message = $_GET["message"];

    // lets test if the variables actually get the values
    echo $name."<br>"; // it does!!

    // you can have some more fun by printing out more variables
}

// for the POST method:
// since the POST method is more secure, I used it to create a sign up form
{
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo $fName."<br>";
}
?>