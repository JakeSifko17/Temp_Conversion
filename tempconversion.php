<?php
for ($DegreesF = 0; $DegreesF <= 100; ++$DegreesF) {
     $DegreesC = round(($DegreesF - 32) * (5 / 9), 1);
     echo "<p>$DegreesF&deg;F = $DegreesC&deg;C</p>";
}
?>

