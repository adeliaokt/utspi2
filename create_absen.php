<!doctype html>
<html lang="en">

<head>
    <title>Data Absen Mahasiswa</title>
</head>

<body>
    <h1>Absen Mahasiswa</h1>
    <a href="absen.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID Absen</label>
        <br>
        <input type="text" name="idabsen">
        <br>
        <label>Tgl Absen</label>
        <br>
        <input type="text" name="tglabsen">
        <br>
        <label>Masuk</label>
        <br>
        <input type="time" name="masuk">
        <br>
        <label>Keluar</label>
        <br>
        <input type="time" name="keluar">
        <br>
        <label>Sesi</label>
        <br>
        <input type="number" name="sesi">
        <br>
        <label>Kelas Sesi</label>
        <br>
        <input type="text" name="kelassesi">
        <br><br>
        <button type="submit" name="submit_simpan_absen">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>