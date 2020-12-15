<!DOCTYPE html>
<html>
<body>

<?php
    $variabele1 = 12;
    $variabele2 = "gewoon tekst";
    $answer = [$variabele1 == $variabele2];
    array_push($answer, $variabele1 === $variabele2);
    array_push($answer, $variabele1 != $variabele2);
    array_push($answer, $variabele1 > $variabele2);
    array_push($answer, $variabele1 < $variabele2);
    array_push($answer, $variabele1 <> $variabele2);
    array_push($answer, $variabele1 >= $variabele2);
    array_push($answer, $variabele1 <= $variabele2);
    var_dump($answer);
?>

</body>
</html> 