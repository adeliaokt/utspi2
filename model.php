<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    // tabel absen
     public function insert_absensi($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
    {
        $sql = "INSERT INTO tbl_absen (id_absen, tgl_absen, masuk, keluar, kode_dosen, sesi, kelas_sesi)
        VALUES ('$idabsen', '$tglabsen', '$masuk', '$keluar', '$kodedosen', '$sesi', '$kelassesi')";
        $this->conn->query($sql);
    }
    public function tampil_data_absen()
    {
         $sql = "SELECT * FROM tbl_absen";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) { 
             $baris[] = $obj;
     }
     if(!empty($baris)){
         return $baris;
     }
    }
    public function edit_absen($id)
    {
         $sql = "SELECT * FROM tbl_absen WHERE id='$idabsen'";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris = $obj;
     }
         return $baris;
    }
    public function update_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
    {
         $sql = "UPDATE tblabsen SET 'idabsen'='$idabsen', 'tglabsen'='$tglabsen', 'masuk'='$masuk', 'keluar'='$keluar', 'kodedosen'='$kodedosen', 'sesi'='$sesi', 'kelassesi'='$kelassesi' WHERE idabsen='$idabsen'";
         $this->conn->query($sql);
    }
    public function delete_absen($id)
    {
        $sql = "DELETE FROM tblabsen WHERE idabsen='$idabsen'";
        $this->conn->query($sql);
    }



//tabel dosen
        public function insert_dosen($kodedosen, $nidn, $nip, $namadosen, $kodeprodi)
        {
            $sql = "INSERT INTO tbldosen (kodedosen, nidn, nip, namadosen, kodeprodi)
            VALUES ('$kodedosen', '$nidn', '$nip', '$namadosen', '$kodeprodi')";
            $this->conn->query($sql);
        }
        public function tampil_data_dosen()
        {
             $sql = "SELECT * FROM tbldosen";
             $bind = $this->conn->query($sql);
             while ($obj = $bind->fetch_object()) {
                 $baris[] = $obj;
             }
             if(!empty($baris)){
                 return $baris;
             }
        }
        
        public function edit_dosen($id)
        {
             $sql = "SELECT * FROM tbldosen WHERE kodedosen='$kodedosen'";
             $bind = $this->conn->query($sql);
             while ($obj = $bind->fetch_object()) 
             {
                 $baris = $obj;
             }
             return $baris;
        }
        public function update_dosen($kodedosen, $nidn, $nip, $namadosen, $kodeprodi)
        {
             $sql = "UPDATE tbldosen SET kodedosen='$kodedosen', nidn='$nidn', nip='$nip', namadosen='$namadosen', kodeprodi='$kodeprodi' WHERE kodedosen='$kodedosen'";
             $this->conn->query($sql);
        }
        public function delete_dosen($id)
        {
            $sql = "DELETE FROM tbldosen WHERE kodedosen='$kodedosen'";
            $this->conn->query($sql);
        }
    
    //tabel prodi
    public function insert_prodi($kodeprodi, $namaprodi)
    {
        $sql = "INSERT INTO tblprodi (kodeprodi, namaprodi)
        VALUES ('$kodeprodi', '$namaprodi')";
        $this->conn->query($sql);
    }
    public function tampil_data_prodi()
    {
         $sql = "SELECT * FROM tblprodi";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris[] = $obj;
         }
         if(!empty($baris)){
             return $baris;
         }
    }
    
    public function edit_prodi($id)
    {
         $sql = "SELECT * FROM tblprodi WHERE kodeprodi='$kodeprodi'";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris = $obj;
         }
         return $baris;
    }
    public function update_prodi($kodeprodi, $namaprodi)
    {
         $sql = "UPDATE tblprodi SET kodeprodi='$kodeprodi', namaprodi='$namaprodi' WHERE kodeprodi='$kodeprodi'";
         $this->conn->query($sql);
    }
    public function delete_prodi($id)
    {
        $sql = "DELETE FROM tblprodi WHERE kodeprodi='$kodeprodi'";
        $this->conn->query($sql);
    }


    //tabel matakuliah
    public function insert_matakuliah($kodemk, $namamk, $sks, $smt, $kodeprodi)
    {
        $sql = "INSERT INTO tblmatakuliah (kodemk, namamk, sks, smt, kodeprodi)
        VALUES ('$kodemk', '$namamk', '$sks', '$smt', '$kodeprodi')";
        $this->conn->query($sql);
    }
    public function tampil_data_matakuliah()
    {
         $sql = "SELECT * FROM tblmatakuliah";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris[] = $obj;
         }
         if(!empty($baris)){
             return $baris;
         }
    }
    public function edit_matakuliah($id)
    {
         $sql = "SELECT * FROM tblmatakuliah WHERE kodemk='$kodemk'";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris = $obj;
         }
         return $baris;
    }
    public function update_matakuliah($kodemk, $namamk, $sks, $smt, $kodeprodi)
    {
         $sql = "UPDATE tblmatakuliah SET kodemk='$kodemk', namamk='$namamk', sks='$sks', smt='$smt', kodeprodi='$kodeprodi' WHERE kodemk='$kodemk'";
         $this->conn->query($sql);
    }
    public function delete_matakuliah($id)
    {
        $sql = "DELETE FROM tblmatakuliah WHERE kodemk='$kodemk'";
        $this->conn->query($sql);
    }

    //tabel jadwal
    public function insert_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
    {
        $sql = "INSERT INTO tbljadwal (id, jadwalid, kodedosen, hari, thnakademik, semester, kodemk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi)
        VALUES ('$id', '$jadwalid', '$kodedosen', '$hari', '$thnakademik', '$semester', '$kodemk', '$sesi', '$jammasuk', '$jamkeluar', '$kelas', '$ruang', '$status', '$kelassesi')";
        $this->conn->query($sql);
    }
    public function tampil_data_jadwal()
    {
         $sql = "SELECT * FROM tbljadwal";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris[] = $obj;
         }
         if(!empty($baris)){
             return $baris;
         }
    }
    public function edit_jadwal($id)
    {
         $sql = "SELECT * FROM tbljadwal WHERE id='$id'";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris = $obj;
         }
         return $baris;
    }
    public function update_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
    {
         $sql = "UPDATE tbljadwal SET (id='$id', jadwalid='$jadwalid', kodedosen='$kodedosen', hari='$hari', thnakademik='$thnakademik', semester='$semester', kodemk='$kodemk', sesi='$sesi', jammasuk='$jammasuk', jamkeluar='$jamkeluar', kelas='$kelas', ruang='$ruang', status='$status', kelassesi='$kelassesi' WHERE id='$id'";
         $this->conn->query($sql);
    }
    public function delete_jadwal($id)
    {
        $sql = "DELETE FROM tbljadwal WHERE id='$id'";
        $this->conn->query($sql);
    }
}