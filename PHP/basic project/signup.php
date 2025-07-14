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
    <h1>Welcome to JayBanca!</h1>
    <h2>Registration Form</h2>
    <form action="" method="post">
        First Name: <input type="text" name="first_name" id="first_name" placeholder="Joe" required> <br>
        Last Name: <input type="text" name="last_name" id="last_name" placeholder="William"> <br>
        Surname: <input type="text" name="surname" id="surname" placeholder="Doe" required> <br>
        Date of birth: <input type="date" name="date_of_birth" id="date_of_birth" required> <br>
        National ID No.: <input type="number" name="id" id="id" placeholder="88888888" required> <br>
        Username: <input type="text" name="username" id="username" placeholder="joedoe01" required> <br>
        Email Address: <input type="email" name="email" id="email" placeholder="example@email.com"> <br>
        Phone Number: <input type="tel" name="phone" id="phone" placeholder="0712345678"> <br>
        Password: <input type="password" name="password" id="password" required> <br>
        <input type="submit" value="Submit" name="signup"> <br>
    </form>
</body>
</html>

<?php

if (isset($_POST["signup"])) {
    $first_name = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_SPECIAL_CHARS) ?: NULL;
    $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_SPECIAL_CHARS);
    $date_of_birth = $_POST["date_of_birth"];
    $id = filter_input(INPUT_POST,"id",FILTER_VALIDATE_INT);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL) ?? NULL;
    $phone = $_POST["phone"] ?? NULL;
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    echo $phone . "<br>";
    echo $last_name . "<br>";

    $sql_add_user = "
                        INSERT INTO users(first_name, last_name, surname, date_of_birth, national_id_no, username, email_address, phone_number, password)
                        VALUES ('$first_name', 
                        " . ($last_name ? "'$last_name'" : "NULL") . ",
                        '$surname', '$date_of_birth', '$id', '$username',
                        " . ($email ? "'$email'" : "NULL") . ",
                        " . ($phone ? "'$phone'" : "NULL") . ",
                        '$password')
    ";

    try{
        mysqli_query($conn, $sql_add_user);
    }
    catch(Exception $e){
        if (str_contains($e->getMessage(), 'Duplicate entry')) {
        echo "Duplicate entry!";
        }
        else {
            echo "Could not register user. <br>Try again later!";
        }
    }
}


mysqli_close($conn);
?>