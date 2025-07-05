<?php
#hashing
// this is the process of converting plain-text sensitive data (passwords) into a series of characters via a mathematical process

// a hash is a hashed password (or so it is in my documentation)
// to create a hash, 
#password_hash($password[your plain text password], [hashing algorithm])

// example:
$password = "qwerty1234";
$hash = password_hash($password, PASSWORD_DEFAULT);

// the hashed password is now safe to store in our database since in case of a data breach, user's passwords wont be visible to the third party
// you can view to hashed password here:
echo $hash;

// what if you want to log in a user using infomation currently available in the database?
// 
?>