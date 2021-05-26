<!doctype html>
<html lang="en">

<head>
    <title>Data Jadwal</title>
</head>

<body>
    <h1>Jadwal</h1>
    <a href="jadwal.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID</label>
        <br>
        <input type="text" name="id">
        <br>
        <label>Jadwal ID</label>
        <br>
        <input type="text" name="jadwalid">
        <br>
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen">
        <br>
        <label>Hari</label>
        <br>
        <input type="text" name="hari">
        <br>
        <label>Tahun Akademik</label>
        <br>
        <input type="text" name="thnakademik">
        <br>
        <label>Semester</label>
        <br>
        <input type="text" name="semester">
        <br>
        <label>Kode Mata Kuliah</label>
        <br>
        <input type="text" name="kodemk">
        <br>
        <label>Sesi</label>
        <br>
        <input type="number" name="sesi">
        <br>
        <label>Jam Masuk</label>
        <br>
        <input type="text" name="jammasuk">
        <br>
        <label>Jam Keluar</label>
        <br>
        <input type="text" name="jamkeluar">
        <br>
        <label>Kelas</label>
        <br>
        <input type="text" name="kelas">
        <br>
        <label>Ruang</label>
        <br>
        <input type="text" name="ruang">
        <br>
        <label>Status</label>
        <br>
        <input type="text" name="status">
        <br>
        <label>Kelas Sesi</label>
        <br>
        <input type="text" name="kelassesi">
        <br>
        <br><br>
        <button type="submit" name="submit_simpan_jadwal">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>