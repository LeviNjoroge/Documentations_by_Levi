<?php
// Inserting data into a table in a database using PHP
// prerequisite of this is for you to have created a database and a table in it, so that we can populate it using PHP

//let's get into it...
include("database.php");

$raw_sql = "INSERT INTO users(user, password) VALUES ('Dora', 'doratheexplorer')"; // store your query in a variable for clean code

// the raw sql statement will work, but a tidier way of doing the same, that can give us more posibilities and 
try {
    mysqli_query($conn, $raw_sql); // this is a method that takes two parameters; connection object and the query
    echo "User registered successfully";
} catch (Exception $e) {
    echo "Could not register user!";
} // introduce a try catch for exeptions handling

mysqli_close($conn); // you should close your openned connection, this is good practice esp for resource management
?>