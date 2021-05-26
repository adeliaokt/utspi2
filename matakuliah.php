<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UTS Pemrograman Internet 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="absen.php">Absensi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="matakuliah.php">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodi.php">Prodi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Mata Kuliah</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <h1>Data Mata Kuliah</h1>
        <a href="create_matakuliah.php">Tambah Data</a>
        <br>
        <a href="print_matakuliah.php" target="_blank">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Sks</th>
                    <th>Semester</th>
                    <th>Kode Prodi</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data_matakuliah();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->kodemk ?></td>
                            <td><?= $data->namamk ?></td>
                            <td><?= $data->sks ?></td>
                            <td><?= $data->smt ?></td>
                            <td><?= $data->kodeprodi ?></td>                            
                            <td>
                                <a name="edit" id="edit" href="edit_matakuliah.php?id=<?= $data->id ?>">Edit</a>
                                <a name="hapus" id="hapus" href="process.php?id=<?= $data->id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel mata kuliah.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>