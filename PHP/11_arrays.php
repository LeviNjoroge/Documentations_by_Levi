<?php
// arrays
// yk the way variables are containers that store single values,
// now arrays store multiple values of the same type in a single variable

// there are different types of arrays:
// 1. indexed arrays
// 2. associative arrays
// 3. multidimensional arrays

// indexed arrays are the common type, the array items/ values in them arrays are represented by a number(index) starting 0
// examples of the different ways of defining the arrays;
$marks0 = array(89,23,83);
// OR
$marks01[0] = 89;
$marks01[1] = 23;
$marks01[2] = 83;

// associative arrays;
// this is an interesting bunch of arrays, 
// why would I say this? stay with me now...
// yk the way array values are in "key and value" pairs, and the keys are usually indexed automatically?
// here, you can define both your keys and values!
// they have their indexes as strings to establish strong association btwn key and values.
// names/keys can be ASSOCIATED with each array element using '=>' symbol
// examples? (thought you'd never ask;) )
$marks1 = array("Austin"=>98, "Sichei"=>97);
// OR
$marks11["Austin"] = 98;
$marks11["Sichei"] = 97;

// multidimensional arrays are also called arrays within arrays
// they store tabular data in a single array
// they can be represented in form of a matrix, ie in rows and columns
$marks2 = array(
    array("67","86","87"),
    array("54","34","37"),
    array("21","12","01")
);
// as you can see, the multidimensional array is just an array that carrys other arrays in it

// array operations
{
    // you can print all the key value pairs of our arrays, using the for loop, 
    // but here we have a more efficient way of doing that:
    // the "for each"
    // syntax:
    /*
    foreach ($variable as $key => $value) {
        # code...
    }
    */
    // example:
    foreach ($marks0 as $index => $mark){
        echo "Mark " . $index +1 . " is {$mark}<br>";
    }
    // this knowledge can be greatly used in retreaving database info
}
{
    // arrays methods:
    array_pop($marks01); // removes the last item in the array
}
?>