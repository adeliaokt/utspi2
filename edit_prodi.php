<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Program Studi</title>
</head>

<body>
    <h1>Edit Program Studi</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
        <br>
        <label>Nama Prodi</label>
        <br>
        <input type="text" name="namaprodi" value="<?php echo $data->namaprodi ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>
</html>