<?php
// Inserting data into a table in a database using PHP
// prerequisite of this is for you to have created a database and a table in it, so that we can populate it using PHP

//let's get into it...
include("database.php");

$raw_sql = "INSERT INTO users(user, password) VALUES ('Dora', 'doratheexplorer')"; // store your query in a variable for clean code

// the raw sql statement will work, but a tidier way of doing the same, that can give us more posibilities and more operatianality will be to use variables to store the data to be entered and pass the variables to the sql statement
// as follows:
$username = "fireman_sam";
$password = "jimjam_sam";
$hash = password_hash($password, PASSWORD_DEFAULT);

$insert_users_query = "
                        INSERT INTO users(user, password)
                        VALUES ('$username', '$hash'); 
"; // remember to use the variable names inside single quotes

try {
    mysqli_query($conn, $insert_users_query); // this is a method that takes two parameters; connection object and the query
    echo "User registered successfully";
} catch (Exception $e) {
    echo "Could not register user!";
} // introduce a try catch for exeptions handling

mysqli_close($conn); // you should close your openned connection, this is good practice esp for resource management
?>