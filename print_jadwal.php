<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Absen</title>
    <style>
        h1 {
            text-align: center;
        }
    table,
    td,
    th {
        border: 1px solid #ddd;
        text-align: left;
    }
    table {
    border-collapse: collapse;
    width: 100%;
    }
    th,
    td {
        padding: 15px;
    }
    </style>
</head>

<body>
    <h1>Laporan Data Jadwal</h1>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Jadwal ID</th>
            <th>Kode Dosen</th>
            <th>Hari</th>
            <th>Tahun Akademik</th>            
            <th>Semester</th>
            <th>Kode Mata Kuliah</th>
            <th>Sesi</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
            <th>Kelas</th>            
            <th>Ruang</th>
            <th>Status</th>            
            <th>Kelas Sesi</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data();
            if ( !empty($result) ) {
                foreach ($result as $data): ?>
                    <tr>
                        <td><?=$index++ ?></td>
                        <td><?=$data->id ?></td>
                        <td><?=$data->jadwalid ?></td>
                        <td><?=$data->kodedosen ?></td>
                        <td><?=$data->hari ?></td>                                             
                        <td><?=$data->thnakademik ?></td>
                        <td><?=$data->semester ?></td>
                        <td><?=$data->kodemk ?></td>
                        <td><?=$data->sesi ?></td>
                        <td><?=$data->jammasuk ?></td>
                        <td><?=$data->jamkeluar ?></td>                                             
                        <td><?=$data->kelas ?></td>
                        <td><?=$data->ruang ?></td>
                        <td><?=$data->status ?></td>
                        <td><?=$data->kelassesi ?></td>
                    </tr>
                <?php endforeach;
            } else{ ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Jadwal.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>