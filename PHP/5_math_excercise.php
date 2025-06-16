<?php
// this is a small exercise given by brocode to calculate the following for a circle:
    // area
    // circumference
    // volume for a sphere of the same dimantions
// ask user input for radius
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Circle!</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="radius" id="radius" placeholder="Enter the radius: "> <br>
        <input type="submit" value="Submit"> <br>
    </form>
</body>
</html>

<?php
    if(isset($_GET["radius"])){
        $radius = $_GET["radius"];

        $circumference = 2 * pi() * $radius;
        $circumference = round($circumference, 2);

        $area = pi() * pow($radius, 2);
        $area = round($area, 2);

        $volume = 4/3 *  pi() * pow($radius, 2);
        $volume = round($volume, 2);

        $surface_area = 4 *  pi() * pow($radius, 2);
        $surface_area = round($surface_area, 2);

        echo "From the circle of radius {$radius}, the following are the calculations: <br>Circumference: {$circumference} <br>Area: {$area} <br><br>Introducing a sphere of the same radius: <br>Volume: {$volume} <br>Surface Area: {$surface_area}";
    }
?>