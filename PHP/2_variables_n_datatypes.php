<?php
    // there are many data types that PHP can handle, 
    // but the fact that PHP is a loosely typed language,
    // means that it is not strict on the data types while declaring and assigning variables

    // to declare a variable, just assign a value to a variable name:
    $age = 20;
    // and just like that you have a variable

    // Rules for PHP variables:
        // A variable starts with the $ sign, followed by the name of the variable
        // A variable name must start with a letter or the underscore character
        // A variable name cannot start with a number
        // A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
        // Variable names are case-sensitive ($age and $AGE are two different variables)
        //                                                                                          ... credits to W3Schools for that portion of var rules

    // let us explore some of the datatypes available:
    $name = "Joe"; //string ... note that the value must be in quotations, either double or single is fine
    $age = 20; //integer
    $gpa = 4.0; //Double/float
    $isStudent = true; //boolean => used in conditional testing not in outputs (true=1, false=0)
    $subjects = array("Math", "English", "Swahili", "Social Studies", "Science", "RE"); //arrays => there are three types of arrays, we are going to look into them in details later
    $amount = NULL; //the null type, used to indicate no value/ empty a variable

    // we also have a few more data types that I havent touched on here, 
    // object
    // resource

    // To get the data type of a variable, use the var_dump() function:
    echo var_dump($age); // outputs int(20)

    // you can also diclare the same value to different variables at the same time:
    $x = $y = $z = 5;

    // var scope
    // this refers to the part of the script that the variables can be used/referenced

    // global scope - var declared outside a function and can only be used outside the function
    {
        $fruit = "Mango";
        function getFruit(){
            // echo $fruit."<br>"; 
            //results in an error stating that the variable fruit is undefined
        }
    }

    //local scope - var declared inside a function, can't be used by anything outside it
    {
        function setPrice(){
            $price = 21;
        }
        setPrice();
        echo $price."<br>"; // the variable "price" is undefined
    }

    // but what if you want to used variables declared globally, inside a function?
    // thanks to the global variable you can do this
    {
        $favGame = "Risk";
        function setFavGame(){
            global $favGame; //declaring the variable as a global variable, hence can and will be used outside the function
            $favGame = "Chess";
        }
        setFavGame();
        echo $favGame."<br>";
    }
    // example 2
    {
        function setPhoneBrand(){
            global $phoneBrand;
            $phoneBrand = "Xiaomi Redmi";
        }
        setPhoneBrand();
        echo $phoneBrand."<br>";
    }
    // another way of using the globals var is using the Super variable array GLOBALS
        {
        $bestFriend = "Brian";
        function setBestFriend(){
            $GLOBALS["bestFriend"] = "Herman"; // the variable is used as an item within the GLOBALS array
        }
        setBestFriend();
        echo $bestFriend."<br>";
    }

    // static state 
    // when a function is done being executed the variables values are often deleted
    // we may want the values to be persistent between calls of the function, 
    // to do so, we will use the static keyword while declaring the variable
    {
        function myNonStaticRuns(){
            $runs = 0;
            $runs += 1;
            echo $runs."<br>";
        }
        myNonStaticRuns();
        myNonStaticRuns();
        myNonStaticRuns();
        // this  prints 1, 1, 1
    }
    {
        function myStaticRuns(){
            static $runs = 0;
            $runs += 1;
            echo $runs."<br>";
        }
        myStaticRuns();
        myStaticRuns();
        myStaticRuns();
        // this prints 1, 2, 3
    }
    // as long as the program is running, the value will always update its value, to hold one of the latest runs
    // this is great for counters
?>