<form method="post">
    <input type="number" placeholder="Zahl 1" name="zahl1">
    <input type="number" placeholder="Zahl 2" name="zahl2">
    <button>Vergleiche</button>
</form>

<?php

$zahl1 = $_POST["zahl1"] ?? 0;
$zahl2 = $_POST["zahl2"] ?? 0;

echo "<h3>Vergleich</h3>";

if ($zahl1 > $zahl2) {
    echo "Zahl <b>$zahl1</b> ist größer als Zahl <b>$zahl2</b>.";
}
if ($zahl1 < $zahl2) {
    echo "Zahl <b>$zahl1</b> ist kleiner als Zahl <b>$zahl2</b>.";
}
if ($zahl1 == $zahl2) {
    echo "Zahl <b>$zahl1</b> ist gleich Zahl <b>$zahl2</b>.";
}
?>