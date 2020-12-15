<!DOCTYPE html>
<html>
<body>

<?php
$var1 = 3;
$var2 = 5;

if($var1 < 10 && $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
    
if($var1 < 10 || $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";

if($var1 < 10 xor $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";

if($var1 < 10 !: $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
?>

</body>
</html> 