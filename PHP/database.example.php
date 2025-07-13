<?php
$db_server = "YOUR_SERVER_NAME";
$db_user = "YOUR_USER_NAME";
$db_password = "YOUR_PASSWORD";
$db_name = "YOUR DATABASE";

try{
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
}
catch(Exception $e){
    echo "Could not connect :/";
}

?>