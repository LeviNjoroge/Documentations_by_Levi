<?php
// COOKIES - these information about a user stored in their wen browser
// the information can include browser preferences and other non-sensitive data

// cookies are stored as key/value pairs in the $_COOKIE supervariable

{
    // to CREATE A COOKIE, use the setcookie() method:
    // syntax:
    # setcookie("key", "value", expiry_date, path_to_storage[blank for default])); 

    // example:
    setcookie("fav_book", "The Whale Rider", time()+(86400*7)); 
    // I have created a cookie by the name fav_book with a value and the same will expire after 7days (ie 86400 seconds in a day times 7)

}
# TIP: you can view your cookies on your browser at applications>storage>cookies in your developer tools

{
    // to DELETE A COOKIE, set the expiration time to time() - 0:
    // syntax:
    # setcookie("key", "value", time() - 0, path_to_storage[blank for default])); 

    // example:
    #setcookie("fav_book", "The Whale Rider", time()-0); 
    // this will make the cookie disappear immediatly.
    // you can otherwise just wait it out and it will expire on its set date
}

// since we know the location of the cookies, we can access them:
if(isset($_COOKIE["fav_book"])){
    echo "Your favourite book is {$_COOKIE["fav_book"]}, I recommend that you buy the book mate!";
}
else{
    echo "I honestly do not know your fav book mate!";
}
?>