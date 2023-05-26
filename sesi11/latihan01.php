<?php
    $dta["NIM"] = "22334455566";
    $dta["NAMA"] = "Mayan Sudiartawan";
    $dta["JKEL"] = "L";
    $dta["ALAMAT"] = "Marsh";
    $dta["HOBI"] = "Mancing";
    $dta["STATUS"] = "Jomblo";
    

    header("content-type: application/json; charset: utf-8");
    echo json_encode($dta);