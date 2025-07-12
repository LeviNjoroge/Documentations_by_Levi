<?php
include('database.php');
// we'll be going through retrieving table data using PHP

// mysqli_query() will still be used, as follows:

$get_users_query = "SELECT * FROM users"; // this is our sql statement that will retreave all the users

$result = mysqli_query($conn, $get_users_query); // this will return an object, hence must be stored in a variable

// first, check if there are any row in the results:
if(mysqli_num_rows($result)>0){ // we are checking if there is at least one row returned
    while($rows= mysqli_fetch_assoc($result)){
        echo $rows["id"] . "<br>";}
}else {
    echo "No user found";
}

mysqli_close($conn);
?>