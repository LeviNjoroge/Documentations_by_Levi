<?php
// here we learn how we can sanitize and validate input from the user 
// that we got using the retreaval methods (GET n POST) 
// and we clean the data to prevent SQL injection and incorrect data input

// sanitize means cleaning the data to remove any unwanted data from it and the remaining clean data is passed through
// validate means we are only accepting valid/clean data through, hence, if there is any illegal characters, the variable is assigned to an empty string, meaning, not valid

// for both, we use the method: filter_input()
// this has three arguments: 
# 1: INPUT_POST, INPUT_GET, INPUT_ENV, INPUT_COOKIE, INPUT_SERVER... using the method or supervariable you used
# 2: name of the variable you are fetching, eg, "username" .. must be string
# 3: filter method, starting with FILTER_
        // to sanitize, use SANITIZE_
        // to validate, use VALIDATE_
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanitize n validate user input</title>
</head>
<body>
    <form action="" method="post">
        <label for="email">email: </label>
        <input type="text" name="email" id="email"> <br>
        <label for="username">username: </label>
        <input type="text" name="username" id="username"> <br>
        <label for="age">age: </label>
        <input type="text" name="age" id="age"> <br>
        <input type="submit" value="Submit" name="submit"> <br>
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    # echo "Hello! {$username}"; // prone to attack

    // if user input sth that contains code, that will be executed, we have to ensure that that code will not be executed in the backend or frontend, 
    // for example; if the user types in the following as their username: "<script>alert("You have a virus")</script>" 
    // an alert box will be displayed and the normal working of our code wont go as planned... that means someone can actually hack our system

    // to prevent this, we can add a filter to sanitize any user input as follows;
    // instead of accessing the value directly from the supervariable $_POST or $_GET, 
    // we sanitize the data we are getting as follows:
    $sanitized_username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS); 
    // this filters input, from the POST method, with name as username, and sanitizes to remove special characters
    echo "Hello {$sanitized_username}";

    // lets sanitize age and validate email:
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); // This will remove any non integer characters
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL); // only valid email will pass through

    // we mostly use sanitize!
}
?>