<?php
    $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

    echo "umur dari Joe ".$age["Joe"]. "tahun<br>";

    echo "<hr>";
    foreach($age as $user => $umur){
        echo "Umur dari " .$user. " : " .$umur . "tahun";
        echo "<br>";

    }