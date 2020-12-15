<!DOCTYPE html>
<html>
<body>

<?php
    $getallen =  [676,5345,78657,3,46,21,47];
    asort($getallen);
    $laag_hoog = $getallen;
    arsort($getallen);
    $hoog_laag = $getallen;
    print_r($laag_hoog);
    print_r($hoog_laag);
?>

</body>
</html> 