<?php
    // koneksi ke database
    

include 'koneksi.php';

if (isset($_POST)) {
    $nama = @$_POST['nama'];
    $ucapan = @$_POST['ucapan'];
    $keterangan = @$_POST['keterangan'];

    if ($nama != "" and $ucapan != "" and $keterangan != ""){
        var_dump($_POST);
        $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";
        $koneksi->query($sql);
    }

    header("Location: http://localhost/UNDANGAN-WEDDING/tugas-undangan-arielgfs/halaman_kedua.php#Ucapan" );
}
