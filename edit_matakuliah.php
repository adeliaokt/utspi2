<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Matakuliah</title>
</head>

<body>
    <h1>Edit Data Matakuliah</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Mata Kuliah</label>
        <br>
        <input type="text" name="kodemk" value="<?php echo $data->kodemk ?>">
        <br>
        <label>Nama Mata Kuliah</label>
        <br>
        <input type="text" name="namamk" value="<?php echo $data->namamk ?>">
        <br>
        <label>Sks</label>
        <br>
        <input type="text" name="sks" value="<?php echo $data->sks ?>">
        <br>
        <label>Semester</label>
        <br>
        <input type="text" name="smt" value="<?php echo $data->smt ?>">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">       
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>
</html>