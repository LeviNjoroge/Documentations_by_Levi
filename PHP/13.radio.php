<?php
    // radio buttons

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio buttons</title>
</head>
<body>
    <form action="" method="post">
        <label for="mode">Please select a mode of payment:</label> <br>
        <input type="radio" name="mode" id="mode" value="visa"> Visa<br>
        <input type="radio" name="mode" id="mode" value="cash"> Cash<br>
        <input type="radio" name="mode" id="mode" value="paypal"> PayPal<br>
        <input type="submit" value="Submit"> <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["mode"])){
        $mode = $_POST["mode"];
        echo "you selected " . $mode;
    }
?>