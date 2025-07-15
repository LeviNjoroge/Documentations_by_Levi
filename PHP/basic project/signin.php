<?php
// sign in page
include("database.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jay_Banca_Signin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Welcome to JayBanca!</h1>
        <h2>Signin Form</h2>
        <form action="" method="post">
            <label for="username">Username / Email:</label>
            <input type="text" name="username" id="username" placeholder="joe_doe" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="********" required>

            <input type="submit" value="Sign In" name="signin">
            
            <p style="color: greenyellow;"><?php echo $message?></p>
        </form>
    </div>
</body>
</html>

<?php
static $count = 3;
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

$verify_user = "SELECT * FROM users WHERE username = '$username' OR email_address = '$username'";

$result = mysqli_query($conn, $verify_user);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $user_username = $user["username"];
    $user_password = $user["password"];
    $_SESSION['first_name'] = $user["first_name"];
    $_SESSION['last_name'] = $user["last_name"];
    
    if (password_verify($password, $user_password)) {
        echo "login successful";
        header("Location: index.php");
    }
    else {
        echo "Incorrect password";
        
    }
}
else {
    $count--;
    echo "Incorrect username <br>You have {$count} more trys remaining";
    if ($count <1) {
        header("Location: signup.php");
    }
}

mysqli_close($conn);
?>