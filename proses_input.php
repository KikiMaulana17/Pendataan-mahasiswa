<?php
include('koneksi.php');
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $sql = "INSERT INTO tbl_mahasiswa (nama, alamat, jk, agama, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$agama', '$asal_sekolah')";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: input_data.php?status=sukses');
    } else {
        header('Location: input_data.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
