<?php
// the registration form
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jay_Banca_Signup</title>
</head>
<body>
    <form action="" method="post">
        First Name: <input type="text" name="first_name" id="first_name" placeholder="Joe" required> <br>
        Last Name: <input type="text" name="last_name" id="last_name" placeholder="William"> <br>
        Surname: <input type="text" name="surname" id="surname" placeholder="Doe" required> <br>
        Date of birth: <input type="date" name="date_of_birth" id="date_of_birth"> <br>
        National ID No.: <input type="number" name="id" id="id" placeholder="88888888"> <br>
        Username: <input type="text" name="username" id="username" placeholder="joedoe01"> <br>
        Email Address: <input type="email" name="email" id="email" placeholder="example@email.com"> <br>
        Phone Number: <input type="tel" name="phone" id="phone" placeholder="0712345678"> <br>
        
        
    </form>
</body>
</html>

<?php
mysqli_close($conn);
?>