<?php
// PHP connect to MySQL database
// PHP allows one to access and manipulate the database via two methods:
# msqli extension
# PDO (PHP Data Objects) - others call it the object oriented method.
                        // most preferred since it can connect to more than just the mysql dtb: eg oracle, postgresql, firebird, IBM, sqlite, FreeTDS, among others
// for this, we will use the MySQL extension since the other requires knowledge of object oriented programming which is beyond the scope of this documentation

// to connect to a mysql database, use the method:
#mysqli_connect([server], [user], [password], [database_name])
// assign this connection to a variable to create an object, this object will represent your connection
// common practise is using "$conn" as the variable name
// eg:
// $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

// if the connection is successful, the variable will be declared, and thats how you can check if you have a successful connection

// remember, this is just for the mysqli extension, other databases work differently
?>