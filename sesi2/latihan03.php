<?php
    $nvar ="P4";
    $nvar = $_GET["pg"];
    switch($nvar){
        case "P1":
        $judulpage = "Halaman 1";
        $konten = "<h3>Halaman 1</h3>";
            break;
        case "P2":
        $judulpage = "Halaman 2";
        $konten = "<h3>Halaman 2</h3>";
            break;
        case "P3":
        $judulpage = "Halaman 3";
        $konten = "<h3>Halaman 3</h3>";
            break;
        case "P4":
        $judulpage = "Halaman 4";
        $konten = "<h3>Halaman 4</h3>";
            break;
        default:
        $judulpage = "Halaman 1";
        $konten = "<h3>Halaman 1</h3>";
        break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage; ?></title>
</head>
<body>
    <a href="Latihan03.php?pg=P1">page1</a>
    <a href="Latihan03.php?pg=P2">page2</a>
    <a href="Latihan03.php?pg=P3">page3</a>
    <a href="Latihan03.php?pg=P4">page4</a>
    <?php
        echo $konten;
    ?>
    
</body>
</html>