<!DOCTYPE html>
<html>
<body>

<?php
    $variabele1 = 3;
    $variabele2 = 6;
    if($variabele1 == $variabele2){
        echo "gelijk <br>";
        } else {
            echo "ongelijk <br>";
        }

    if($variabele1 != $variabele2){
        echo "ongelijk <br>";
        } else {
            echo "gelijk <br>";
        }

    if($variabele1 === $variabele2){
        echo "identiek <br>";
        } else {
            echo "Anders <br>";
        }

    if($variabele1 > $variabele2){
        echo "test1 is groter dan test2 <br>";
        } else {
            echo "test1 is kleiner dan test2 <br>";
        }

    if($variabele1 < $variabele2){
        echo "test1 is kleiner dan test2 <br>";
        } else {
            echo "test1 is groter dan test2 <br>";
        }

    if($variabele1 >= $variabele2){
        echo "test1 is groter of gelijk aan test2 <br>";
        } else {
            echo "test1 is kleiner of gelijk aan test2 <br>";
        }
            
    if($variabele1 <= $variabele2){
        echo "test1 is kleiner of gelijk aan test2 <br>";
        } else {
            echo "test1 is groter of gelijk aan test2 <br>";
        }
?>

</body>
</html> 