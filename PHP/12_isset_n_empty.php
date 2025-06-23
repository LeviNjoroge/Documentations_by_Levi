<?php
    // isset and empty, used to figure out if html elements were filled in or intereacted with
    // isset() returns true if a variable is declared and not null
    // empty() return true if a variable is not declared, null, false, ""

    // example
    $username = null;
    echo isset($username); // returns false/0/""
    echo empty($username); // returns true/1

    $username = "Kahutia Te Rangi";
    if (isset($username)) {
        echo "the vaiable IS set!"; // this is executed
    }
    else{
        echo "The variable IS NOT set!";
    }

    $name = "";
    if(empty($name)){
        echo "The variable IS empty";
    }
    else{
        echo "The varianle IS NOT empty";
    }
?>