<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello <?php echo empty($_SESSION["username"])?"Guest":$_SESSION["username"] ?></h1>
    <p>This is a model website to show you how to use the session</p>
    <p>Evidently, the information is persistent as long as we maintain the session!</p>
    <form action="" method="get">
        <input type="submit" value="logout" name="logout"> <br>
    </form>
</body>
</html>
<?php
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: login.php");
}
?>