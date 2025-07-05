<?php
// COOKIES - these information about a user stored in their wen browser
// the information can include browser preferences and other non-sensitive data

// cookies are stored as key/value pairs in the $_COOKIE supervariable

// to create a cookie, use the setcookie() method:
setcookie("fav_book", "The Whale Rider", time()+(82400*7)); 
// I have created a cookie by the name fav_book
?>