<?php
// here we learn how we can sanitize and validate input from the user 
// that we got using the retreaval methods (GET n POST) 
// and we clean the data to prevent SQL injection and incorrect data input
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
        <label for="username">Username: </label>
        <input type="text" name="username" id="username"> <br>
        <input type="submit" value="Submit" name="submit"> <br>
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    echo "Hello! {$username}";

    // if user input sth that contains code, that will be executed, we have to ensure that that code will not be executed in the backend or frontend, 
    // for example; if the user types in the following as their username: "<script>alert("You have a virus")</script>" 
    // an alert box will be displayed and the normal working of our code wont go as planned... that means someone can actually hack our system

    // to prevent this, we can add a filter to sanitize any user input as follows;
    
}
?>