<!--
    Will be discussing outputs and comments

    Comments are usually added for the following reasons:
        1. Let others understand your code
        2. Remind yourself of what you did
        3. Leave out some parts of your code (Mainly during testing)
    
    There are two types of comments; 
        1. Multiline - Covers many lines, like the commenting on this.
                        uses /* and */
                        this can also be used in the middle of a statement
        2. Singleline - covers only the line that is involved
                        uses // before the comment

    Outputs in php can be done using either "echo" which is the most common
    or using "print".
-->

<?php
    //simple "hello world" statement using both print and echo
    echo "Hello World! <br>";
    print "Hello World <br>";

    //string contatenation: appending a string or variable to a string
    $name = "Levi";
    echo "My name is ".$name."<br>";
    print "My name is ".$name."<br>";
?>