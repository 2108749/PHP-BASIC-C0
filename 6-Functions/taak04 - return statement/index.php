<?php
    function geefTienProcent(){
        $koopprijs = 75;
        $korting = 10;
        return $koopprijs / $korting;
        return '<h1>' . geefTienProcent() . '</h1>';
    }
    geefTienProcent();
    