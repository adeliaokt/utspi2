<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Absensi Mahasiswa</title>
</head>

<body>
    <h1>Edit Absensi Mahasiswa</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID Absen</label>
        <br>
        <input type="text" name="idabsen" value="<?php echo $data->idabsen ?>">
        <br>
        <label>Tgl Absen</label>
        <br>
        <input type="text" name="tglabsen" value="<?php echo $data->tglabsen ?>">
        <br>
        <label>Masuk</label>
        <br>
        <input type="text" name="masuk" value="<?php echo $data->masuk ?>">
        <br>
        <label>Keluar</label>
        <br>
        <input type="text" name="keluar" value="<?php echo $data->keluar ?>">
        <br>
        <label>Sesi</label>
        <br>
        <input type="number" name="sesi" value="<?php echo $data->sesi ?>">
        <br>
        <label>Kelas Sesi</label>
        <br>
        <input type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>
</html>