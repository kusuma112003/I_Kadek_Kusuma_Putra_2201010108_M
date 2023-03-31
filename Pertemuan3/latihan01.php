<?php

    $cars = array("Volvol", "Bmw", "Toyota", "Daihatsu");

    $jmldta = count($cars);
    echo "Jumlah Data: ". $jmldta . "<br>";
    for($i=0;$i<$jmldta;$i++){
        echo "<br>kendaraan ".$cars[$i];
    }
    echo "<hr>";

    echo "<ol>";
    foreach($cars as $dta){
        echo "<li> Kendaraan ". $dta . "</li>";
    }
    echo "</ol>";