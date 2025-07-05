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
// will you have to dehash the password as one would decrypt one?
// unfortunately, there is nothing like that, we however have a way to your goal, a simpler way even:
#password_verify($password, $hash) - verifies that the password matches the hash, 
    // can be used to compare a plain-text password against a hashed one n see if they are mathematically similar

// example:
password_verify("azerty1234", $hash); // this will return false

// you can apply this to verifying user input using an if statement:
if (password_verify("pizza123", $hash)) {
    echo "Log in successful!";
}else {
    echo "incorrect password!";
}
?>