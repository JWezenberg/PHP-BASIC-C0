<!DOCTYPE html>
<html>
<body>

<?php
function mijnNaamIsGroot(){
    $voornaam = "John";
    $achternaam = "Wezenberg";
    $geheleNaam = "Mijn naam is " . $voornaam . " " . $achternaam;
    $geheleNaam = strtoupper($geheleNaam);
    echo $geheleNaam;
}
mijnNaamIsGroot();
?>

</body>
</html> 