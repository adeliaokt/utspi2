<!doctype html>
<html lang="en">

<head>
    <title>Data Matakuliah</title>
</head>

<body>
    <h1>Mata Kuliah</h1>
    <a href="matakuliah.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Mata Kuliah</label>
        <br>
        <input type="text" name="kodemk">
        <br>
        <label>Nama Mata Kuliah</label>
        <br>
        <input type="text" name="namamk">
        <br>
        <label>Sks</label>
        <br>
        <input type="text" name="sks">
        <br>
        <label>Semester</label>
        <br>
        <input type="time" name="smt">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi">        
        <br><br>
        <button type="submit" name="submit_simpan_matakuliah">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>