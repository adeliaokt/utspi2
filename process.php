<?php
include 'model.php';

//tabel absen
if (isset($_POST['submit_simpan'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $sesi = $_POST['sesi'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->insert($idabsen, $tglabsen, $masuk, $keluar, $sesi, $kelassesi);
    header('location:absen.php');
}
if (isset($_POST['submit_edit'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $sesi = $_POST['sesi'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->insert($idabsen, $tglabsen, $masuk, $keluar, $sesi, $kelassesi);
    header('location:absen.php');
}
if (isset($_GET['idabsen'])) {
    $id = $_GET['idabsen'];
    $model = new Model();
    $model->delete($id);
    header('location:absen.php');
}

//tabel dosen
if (isset($_POST['submit_simpan'])) {
    $kodedosen = $_POST['kodedosen'];
    $nidn = $_POST['nidn'];
    $nip = $_POST['nip'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];    
    $model = new Model();
    $model->insert($kodedosen, $nidn,  $nip, $namadosen, $kodeprodi);
    header('location:dosen.php');
}
if (isset($_POST['submit_edit'])) {
    $kodedosen = $_POST['kodedosen'];
    $nidn = $_POST['nidn'];
    $nip = $_POST['nip'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];    
    $model = new Model();
    $model->insert($kodedosen, $nidn,  $nip, $namadosen, $kodeprodi);
    header('location:dosen.php');
}

if (isset($_GET['kodedosen'])) {
    $id = $_GET['kodedosen'];
    $model = new Model();
    $model->delete($id);
    header('location:dosen.php');
}

//tabel jadwal
if (isset($_POST['submit_simpan'])) {
    $id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik']; 
    $semester = $_POST['semester'];
    $kodemk = $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];  
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];  
    $model = new Model();
    $model->insert($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
    header('location:jadwal.php');
}
if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik']; 
    $semester = $_POST['semester'];
    $kodemk = $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];  
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];  
    $model = new Model();
    $model->insert($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
    header('location:jadwal.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('location:jadwal.php');
}

//tabel matakuliah
if (isset($_POST['submit_simpan'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kodeprodi = $_POST['kodeprodi'];    
    $model = new Model();
    $model->insert($kodemk, $namamk, $sks, $smt, $kodeprodi);
    header('location:matakuliah.php');
}
if (isset($_POST['submit_edit'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kodeprodi = $_POST['kodeprodi'];    
    $model = new Model();
    $model->insert($kodemk, $namamk, $sks, $smt, $kodeprodi);
    header('location:matakuliah.php');
}
if (isset($_GET['kodemk'])) {
    $id = $_GET['kodemk'];
    $model = new Model();
    $model->delete($id);
    header('location:matakuliah.php');
}

//tabel matakuliah
if (isset($_POST['submit_simpan'])) {
    $kodeprodi = $_POST['kodeprodi'];
    $namaprodi = $_POST['namaprodi'];       
    $model = new Model();
    $model->insert($kodemk, $namaprodi);
    header('location:matakuliah.php');
}
if (isset($_POST['submit_edit'])) {
    $kodeprodi = $_POST['kodeprodi'];
    $namaprodi = $_POST['namaprodi'];        
    $model = new Model();
    $model->insert($kodeprodi, $namaprodi);
    header('location:prodi.php');
}
if (isset($_GET['kodeprodi'])) {
    $id = $_GET['kodeprodi'];
    $model = new Model();
    $model->delete($id);
    header('location:prodi.php');
}