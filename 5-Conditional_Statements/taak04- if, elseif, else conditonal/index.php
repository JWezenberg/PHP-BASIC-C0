<!DOCTYPE html>
<html>
<body>

<?php
$prod_besteld = 12;
$answer = [];

if($prod_besteld < 10) {
    $prijs1 = 1.50;
} elseif($prod_besteld < 20) {
    $prijs1 = 1.25;
} else {
    $prijs1 = 1.00;
}

$prod_besteld = 6;

if($prod_besteld < 10) {
    $prijs2 = 1.50;
} elseif($prod_besteld < 20) {
    $prijs2 = 1.25;
} else {
    $prijs2 = 1.00;
}


$prod_besteld = 22;

if($prod_besteld < 10) {
    $prijs3 = 1.50;
} elseif($prod_besteld < 20) {
    $prijs3 = 1.25;
} else {
    $prijs3 = 1.00;
}

echo "$prijs1 <br> $prijs2 <br> $prijs3";
?>

</body>
</html> 