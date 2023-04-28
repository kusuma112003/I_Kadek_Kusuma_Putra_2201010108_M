<?php
include("cmd/user.php");
    //cek pengiriman form
    if(isset($_POST["txPASS1"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAME"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];

            if( createuser($nama, $email, $user, $pass) ){

            }else{}
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="register.php">
        <div>
            Nama lengkap
            <input type="text" name="txNAME">
        </div>
        <div>
            Email
            <input type="text" name="txEMAIL">
        </div>
        <div>
            User
            <input type="text" name="txUSER">
        </div>
        <div>
            Password
            <input type="password" name="txPASS1">
        </div>
        <div>
            Verifikasi password
            <input type="password" name="txPASS2">
        </div>

        <div>
            <button type="submit"> Register </button>
        </div>
    
</body>
</html>