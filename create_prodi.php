<!doctype html>
<html lang="en">

<head>
    <title>Data Program Studi</title>
</head>

<body>
    <h1>Program Studi</h1>
    <a href="prodi.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi">
        <br>
        <label>Nama Prodi</label>
        <br>
        <input type="text" name="namaprodi">        
        <br><br>
        <button type="submit" name="submit_simpan_prodi">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>