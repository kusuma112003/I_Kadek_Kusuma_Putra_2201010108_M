<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    
    <div>Perulangan For<p> for(nAwal;range;counter){<br>area perulangan <br>} </p></div>

    <script>
        for(let i=0; i<10; i++){
            document.write("<br>perulangan ke-"+i);
        }
    </script>

    <div>
        perulangan while<p>while(logika){<br>Area Pengulangan<br>}</p>
    </div>
    <script>
        let nAWAL = 0;
        var nAKHIR = 10;
        while(nAWAL < nAKHIR){
            document.write("<br>perulangan ke-"+nAWAL);
            nAWAL++;
        }
    </script>
</body>
</html>