<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="latihan" method="POST" onsubmit="return checkform(this)">
        <div>
            NAMA
            <input type="text" name="txNAMA" id="NAMA">
        </div>

        <div>
            NIM
            <input type="text" name="txNIM" id="NIM">
        </div>

        <div>
            JENIS KELAMIN
            <input type="radio" name="txJK" id="JK1" value="Laki-Laki">Laki-Laki
            <input type="radio" name="txJK" id="JK2" value="Perempuan">Perempuan
        </div>

        <div>
            JURUSAN
            <select name="txJURUSAN" id="JURUSAN">
                <option value="Tata Boga">Tata Boga</option>
                <option value="Tata Busana">Tata Busana</option>
                <option value="Tata Elektro">Tata Elektro</option>
                <option value="Tata Multimedia">Tata Multimedia</option>
            </select>
        </div>

        <div>
            HOBI
            <input type="checkbox" name="txHOBI_MANCING" value="Mancing">Mancing
            <input type="checkbox" name="txHOBI_MENYANYI" value="Menyanyi">Menyanyi
            <input type="checkbox" name="txHOBI_TIDUR" value="Tidur">Tidur
            <input type="checkbox" name="txHOBI_TAWURAN" value="Tawuran">Tawuran
        </div>
            
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>
    <script>
        function checkform(frm){
            let F=frm.elements;
            let nama=F.namedItem('txNAMA').value;
            let nim=F.namedItem('txNIM').value;
            let jenis_k=F.namedItem('txJK').value;
            let jurusan=F.namedItem('txJURUSAN').value;
            let hobi=[
                F.namedItem('txHOBI_MANCING').checked,
                F.namedItem('txHOBI_MENYANYI').checked,
                F.namedItem('txHOBI_TIDUR').checked,
                F.namedItem('txHOBI_TAWURAN').checked
            ];
            console.log("NIM: " + nim);
            console.log("NAMA: " + nama);
            console.log("JENIS KELAMIN: " + jenis_k);
            console.log("JURUSAN: " + jurusan);
            console.log("HOBI: " + hobi);
            return false;
        }
    </script>
</body>
</html>
