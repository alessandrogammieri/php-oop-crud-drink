<?php

    include "db-popo.php";
    include "db-connection.php";
    include "db-query.php";

    $res = $conn -> query($query_getAllDrinks);

    $drinks = [];
   
    if ($res && $res -> num_rows > 0) {

        while ($row = $res -> fetch_assoc()) {

        $drink = new Bancone($row);
        $drinks[] = $drink;
        // $drinks[] = new Bancone($row);
        }
    }

    for ($i=0; $i<sizeof($drinks); $i++) {

        $drink = $drinks[$i];
        echo $drink -> toString() . "<br>";
    }
    echo "<br>--------------------------------<br><br>";
    
    $min = $drinks[0];
    $max = $drinks[0];
    $sum = 0;

    for ($i=0; $i<sizeof($drinks); $i++) {

        $drink = $drinks[$i];
        $sum += $drink -> getPrice();

        if ($min -> getPrice() > $drink -> getPrice()) {
            $min = $drink;
        }
        if ($max -> getPrice() < $drink -> getPrice()) {
            $max = $drink;
        }
    }

    echo "Min: " . $min -> toString() . "<br>";
    echo "Max: " . $max -> toString() . "<br>";
    echo "Somma di tutti i prezzi: € " . $sum;
    
?>