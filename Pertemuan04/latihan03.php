<?php
    $usr = "";
    $ps = "";
    if(isset ($_REQUEST["txUser"])){
        $usr = $_REQUEST["txUser"];
        $ps = $_REQUEST["txPassword"];
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan request hendle</title>
</head>
<body>
   
    <form method="POST" action="latihan03.php">
        <div>
           Username: <input type= "text" name="txUser">
        </div>

        <div>
           Password: <input type= "password" name="txPassword">
        </div>
        
        <div>
        <button> Login </button>
        </div>
    </form>
    <div>
        isi dari Form:<br>
            1.Username: <?=$usr?><br>
            2.Password: <?=$ps?>
</div>
</body>
</html>