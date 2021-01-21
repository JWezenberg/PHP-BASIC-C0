<!DOCTYPE html>
<html>
<body>

<?php
function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 0.9; //1 is 100%
    $prijs = $koopPrijs * $korting;
    return $prijs;
}
echo "het totaalbedrag is " . geefTienProcent() . " euro"
?>

</body>
</html> 