<!doctype html>
<html lang="en">

<head>
    <title>Data Dosen</title>
</head>

<body>
    <h1>Data Dosen</h1>
    <a href="dosen.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen">
        <br>
        <label>Nidn</label>
        <br>
        <input type="text" name="nidn">
        <br>
        <label>Nip</label>
        <br>
        <input type="text" name="nip">
        <br>
        <label>Nama Dosen</label>
        <br>
        <input type="text" name="namadosen">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi">        
        <br><br>
        <button type="submit" name="submit_simpan_dosen">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>