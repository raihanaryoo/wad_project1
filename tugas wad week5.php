<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator KaBaTaKu</title>
</head> 
<body>
    <h1>Kalkulator KaBaTaKu</h1>
    
    <label for="ang1">Angka 1:</label>
    <input type="number" id="ang1" name="ang1"><br><br>

    <label for="angka2">Angka 2:</label>
    <input type="number" id="ang2" name="ang2"><br><br>

    <label for="operasi">Operasi:</label>
    <select id="operasi" name="operasi">
        <option value="tambah">Kali</option>
        <option value="kurang">Bagi</option>
        <option value="kali">Tambah</option>
        <option value="bagi">Kurang</option>
    </select><br><br>

    <button onclick="hitung()">Hitung</button>

    <p>Hasil: <span id="hasil"></span></p>

    <script>
        function hitung() {
            var ang1 = parseFloat(document.getElementById("ang1").value);
            var ang2 = parseFloat(document.getElementById("ang2").value);
            var operasi = document.getElementById("operasi").value;
            var hasil = 0;

            if (operasi === "tambah") {
                hasil = ang1 + ang2;
            } else if (operasi === "kurang") {
                hasil = ang1 - ang2;
            } else if (operasi === "kali") {
                hasil = ang1 * ang2;
            } else if (operasi === "bagi") {
                hasil = ang1 / ang2;
            }

            document.getElementById("hasil").textContent = hasil;
        }
    </script>
</body>
</html>
