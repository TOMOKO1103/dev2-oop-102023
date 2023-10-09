<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare</title>
</head>
<body>
    <form action="" method="post">
        <label for="age">Age</label>
        <input type="number" name="age" id="age" placeholder="Age">
        <br>
        <label for="distance">Distance</label>
        <input type="text" name="distance" id="distance" placeholder="Distance(km)">

        <br>
        <button type="compute" name="btn_compute">Compute</button>

    </form>

    <?php 
    include "Fare.php";

    if(isset($_POST['btn_compute'])){
        $age = $_POST['age'];
        $distance = $_POST['distance'];

        $fare = new Fare; 

        $fare->setAge($age);
        $fare->setDistance($distance);
        $fare->setFare();

        echo "Age: " . $fare->getAge() . "years old<br>"; 
        echo "Distance: " . $fare->getDistance() . "km<br>"; 
        echo "Fare:" . $fare->getFare() . "$<br>";
    }
    ?>
    
</body>
</html>