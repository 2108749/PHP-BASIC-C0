<?php
    $prod_besteld = 67;

    if($prod_besteld < 10) {
        $prijs = 1.50;
    } elseif($prod_besteld < 20) {
        $prijs = 1.25;
    } else {
        $prijs = 1.00;
    }
    echo $prod_besteld;


















