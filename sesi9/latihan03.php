<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan03</title>
</head>
<body>

    <form>
        <div>
            Nama Lengkap:
            <input type="text" id="txNAMA" placeholder="Masukan Nama Lengkap">
        </div>
        <div>
            <button type="button" onclick="checknama()"> CheckNama </button>
        </div>
    </form>
    <script>
        function checknama(){
            let nm = document.getElementById("txNAMA").value;
            alert("Isi dari field txNAMA: "+nm);
        }
    </script>
    
</body>
</html>