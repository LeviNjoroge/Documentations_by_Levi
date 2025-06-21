<?php
$countries = array(
    "USA" => "Washington D.C.",
    "UK" => "London",
    "Kenya" => "Nairobi",
    "Canada" => "Ottawa",
    "Germany" => "Berlin",
    "France" => "Paris",
    "Italy" => "Rome",
    "Brazil" => "Brasília",
    "Japan" => "Tokyo",
    "China" => "Beijing",
    "India" => "New Delhi",
    "Russia" => "Moscow",
    "Australia" => "Canberra",
    "South Africa" => "Pretoria",
    "Nigeria" => "Abuja",
    "Egypt" => "Cairo",
    "Mexico" => "Mexico City",
    "Spain" => "Madrid",
    "Norway" => "Oslo",
    "Argentina" => "Buenos Aires"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitals</title>
</head>
<body>
    <form action="" method="get">
        <label for="country">Enter the country below: </label>
        <input type="text" name="country" id="country"> <br>
        <input type="submit" value="Find Capital!"> <br>
    </form>
</body>
</html>
<?php
    if(isset($_GET["country"])){
        $country = $_GET["country"];
        $capital = $countries[$country];
        echo "The capital of {$country} is {$capital}";
        // or
        // echo "The capital of {$_GET["country"]} is {$countries[$_GET["country"]]}"; 
        // the above for efficiency:)
    }
?>