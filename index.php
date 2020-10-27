<?php

require "Car.php";

$car = new Car("red", 4, "diesel");
echo $car;
echo "<hr>";
echo "<h3>Frein à main non activé</h3>";
echo "<h3>Voiture à l'arrêt</h3>";
var_dump($car);
echo "<hr>";
echo "\n";
echo "<h3>Activation du frein à main</h3>";
$car->setParkBrake();
var_dump($car);
echo "<hr>";
echo "<h3>Gestion du cas où frein à main activé</h3>";
try {
    $car->start();
} catch (Exception $e) {
    $car->setParkBrake();
} finally {
    $car->start(); //permet de faire démarrer la voiture après avoir désactivé le frein à main
    echo "Ma voiture roule comme un donut";
}
echo "<hr>";
echo "<h3>Voiture démarrée, frein à main désactivé</h3>";
var_dump($car);