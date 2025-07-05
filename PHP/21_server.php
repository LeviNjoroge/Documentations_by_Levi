<?php
#$_SERVER
// this is a superglobal variable that contains headers, paths and script locations
// basically it's a web server created SGB that has everything we need to know about the current web page environment

// information that is contained in it is displayed here:
echo "The SERVER superglobal variable contains the following: <br><br>";
foreach($_SERVER as $key => $value){
    echo "$key = $value <br>";
}
?>