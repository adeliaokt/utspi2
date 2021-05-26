<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Data Absen Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">UTS Pemrograman Internet 2</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="absen.php">Absensi</a></li>
                <li class="nav-item"><a class="nav-link" href="dosen.php">Dosen</a></li>
                <li class="nav-item"><a class="nav-link" href="matakuliah.php">Mata Kuliah</a></li>
                <li><a href="prodi.php">Prodi</a></li>                
            </ul>
        </div>
</nav>

<h1>Data Absen Mahasiswa</h1>
        <a href="create_absen.php">Tambah Data</a>
        <br>
        <a href="print_absen.php" target="_blank">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Absen</th>
                    <th>Tgl Absen</th>
                    <th>Masuk</th>
                    <th>Keluar</th>
                    <th>Kode Absen</th>
                    <th>Sesi</th>
                    <th>Kelas Sesi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                        <td><?= $index++ ?></td>
                            <td><?= $data->idabsen ?></td>
                            <td><?= $data->tglabsen ?></td>
                            <td><?= $data->masuk ?></td>
                            <td><?= $data->keluar ?></td>
                            <td><?= $data->sesi ?></td>
                            <td><?= $data->kelassesi ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit.php?nim=<?= $data->nim ?>">Edit</a>
                                <a name="hapus" id="hapus" href="process.php?nim=<?= $data->nim ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Absen Mahasiswa.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
       
</body>
</html>