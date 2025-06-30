<?php
// string functions
// we'll be delving into some functions that can be used to manipulate string values

// for starters, lets make a model that we are going to use:
$compName = "Kasuku!";
$phrase = "  put it down on paper✍📝";

echo strtoupper($compName) . "<br>"; // makes all the characters uppercase
echo strtolower($compName) . "<br>"; // makes all chars lowercase
echo ucwords($phrase) . "<br>"; // all the first letters of the words are uppercase
echo strlen($phrase) . "<br>"; // returns the length of the string
echo strrev($compName) . "<br>"; // reverses the string
echo str_word_count($phrase) . "<br>"; // counts the individual words in the string
echo strpos($phrase, " down") . "<br>"; // searches for a character in the string and returns the character position of the first match of a match
echo trim($phrase) . "<br>"; // removes any whitespace b4 or after the string
echo str_replace("down", "up", $phrase) . "<br>"; // replaces some characters with other specified ones
echo substr($phrase, 5, 12) . "<br>";
?>