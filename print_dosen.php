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
    <h1>Laporan Data Dosen</h1>
    <table>
        <thead>
        <tr>
            <th>Kode Dosen</th>
            <th>Nidn</th>
            <th>Nip</th>
            <th>Nama Dosen</th>
            <th>Kode Prodi</th>          
        </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data();
            if ( !empty($result) ) {
                foreach ($result as $data): ?>
                    <tr>
                        <td><?=$index++ ?></td>
                        <td><?=$data->kodedosen ?></td>
                        <td><?=$data->nidn ?></td>
                        <td><?=$data->nip ?></td>
                        <td><?=$data->namadosen ?></td>                                             
                        <td><?=$data->kodeprodi ?></td>                        
                    </tr>
                <?php endforeach;
            } else{ ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Dosen.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>