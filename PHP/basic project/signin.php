<?php
// sign in page
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jay_Banca_Signin</title>
</head>
<body>
    <h1>Welcome to JayBanca!</h1>
    <h2>Signin Form</h2>
    <form action="" method="post">
        username/email: <input type="text" name="username" id="username"> <br>
        password <input type="password" name="password" id="password"> <br>
        <input type="submit" value="Submit" name="Sign In"> <br>
    </form>
</body>
</html>

<?php
mysqli_close($conn);
?>