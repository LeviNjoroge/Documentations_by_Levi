<?php
session_start() // for all the files that will use $_SESSION data, you must start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username" id="username"> <br>
        Password: <input type="password" name="password" id="password"> <br>
        <input type="submit" value="login" name="login"> <br>
    </form>
</body>
</html>
<?php
if(isset($_POST["login"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        echo "<script>alert('Login successful!')</script>";
        header("Location: index.php");
    }
    else {
        echo "Enter username/password!";
    }
}
?>