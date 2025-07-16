<?php
// to export all apis

include("database.php");

function check_balance($id){

    $sql_check_balance = "SELECT balance FROM finances WHERE user_id = {$id}";
    $result = mysqli_query($GLOBALS["conn"], $sql_check_balance);
}

mysqli_close($conn);
?>