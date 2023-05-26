<?php
    $dta[0]["NIM"] = "22334455566";
    $dta[0]["NAMA"] = "Mayan Sudiartawan";
    $dta[0]["JKEL"] = "L";
    $dta[0]["ALAMAT"] = "Marsh";
    $dta[0]["HOBI"] = "P Balap";
    $dta[0]["STATUS"] = "Jomblo";
    
    $dta[1]["NIM"] = "2233442266";
    $dta[1]["NAMA"] = "NI Putu Anggita Dwi Lestari Dwi Semesta";
    $dta[1]["JKEL"] = "P";
    $dta[1]["ALAMAT"] = "Semesta1";
    $dta[1]["HOBI"] = "Mancing Keributan";
    $dta[1]["STATUS"] = "Jomblo";

    $dta[2]["NIM"] = "2233443366";
    $dta[2]["NAMA"] = "Mayan Sudiartawan";
    $dta[2]["JKEL"] = "L";
    $dta[2]["ALAMAT"] = "Bumi";
    $dta[2]["HOBI"] = "P Balap";
    $dta[2]["STATUS"] = "Jomblo";
    
    $dta[1]["NIM"] = "22334451566";
    $dta[1]["NAMA"] = "NI Putu Bulan";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ALAMAT"] = "Bulan";
    $dta[1]["HOBI"] = "Tidur";
    $dta[1]["STATUS"] = "Jomblo";

    $dta[1]["NIM"] = "22334456566";
    $dta[1]["NAMA"] = "I Kadek Kebus";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ALAMAT"] = "Matahari";
    $dta[1]["HOBI"] = "P Balap";
    $dta[1]["STATUS"] = "Jomblo";
    header("content-type: application/json; charset: utf-8");
    echo json_encode($dta);