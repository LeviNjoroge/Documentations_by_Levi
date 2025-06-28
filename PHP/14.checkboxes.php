<?php
// we can read data from checkboxes too, as demonstrated in the following illustration

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>
    <form action="" method="post">
        <input type="checkbox" name="foods[]" id="pizza" value="Pizza">Pizza <br>
        <input type="checkbox" name="foods[]" id="hambugger" value="Hambugger">Hambugger <br>
        <input type="checkbox" name="foods[]" id="hotdog" value="Hotdog">Hotdog <br>
        <input type="checkbox" name="foods[]" id="tako" value="Tako">Tako <br>
        <input type="submit" value="Submit" name="submit"> <br>
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
        $food = $_POST["foods"];
        echo "You like ";
        foreach ($food as $key => $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
?>