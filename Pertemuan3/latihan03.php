<?php

    $mhs = array(
        array("Nama"=>"Boiboy", "ID"=>"1234", "KOTA"=>"Durian runtuh"),
        array("Nama"=>"Jarjit", "ID"=>"3224", "KOTA"=>"Malang"),
        array("Nama"=>"Susanti", "ID"=>"5542", "KOTA"=>"Jakarta"),
        array("Nama"=>"Patrik", "ID"=>"5423", "KOTA"=>"Bikini Botton"),
    );
//     echo $mhs[1]["Nama"];
//     echo "<hr>";
//     print_r($mhs);
//     echo "<hr>";

// foreach($mhs as $dta){
//     foreach($dta as $ib =>$nval){
//         echo $ib. " : ". $nval. "<br>";
//     }
//     echo "<br>";
// }
header("Content-type: application /json");
echo json_encode($mhs);