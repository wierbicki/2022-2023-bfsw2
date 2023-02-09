<?php

echo "<h2>Funktionen</h2>";
echo "<h3>Beispiele</h3>";

echo "Quadratwurzel anzeigen: ";
echo sqrt(9);
echo "<br>";

echo "Zufallszahl anzeigen: ";
echo rand(1,9);

echo "<h3>Eigene Funktionen</h3>";
echo "Funktion echo_h2: ";

function echo_h2($text){
    echo "<h2 
    style=\"font-family:Bahnschrift; color: red;\">
    $text</h2>";
}
echo_h2("Denis");
echo_h2("Tobi");

?>