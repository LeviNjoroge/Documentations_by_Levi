<?php
#SESSION
// this is a very important Super Global Variable used to store infomation about the user to be used accross multiple pages/files
// why is it important?
// suppose you want to create a login/signup page for users and you want to display/access their info as long as they are logged in,
// this is great for you since as long as the user is in session, the values stored in the $_SESSION super variable will apply

// to illustrate this, I will create a login and home page:
include("20_session_demo/login.php");

// some of the important bits about the session include:
#session_start() - starts a new or resumes an existing session
#session_destroy() - destroys all data registered to a session
#$_SESSION[] 

// an important method that appears is the header() method, that is used to redirect the user to a different file
// syntax: 
# header("Location: /your file/");
// an example of the same is used in the demo project
?>