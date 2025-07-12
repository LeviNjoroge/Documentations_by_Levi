<?php
// Inserting data into a table in a database using PHP
// prerequisite of this is for you to have created a database and a table in it, so that we can populate it using PHP

//let's get into it...
include('database.php');

mysqli_close($conn); // you should close your openned connection, this is good practice esp for resource management
?>