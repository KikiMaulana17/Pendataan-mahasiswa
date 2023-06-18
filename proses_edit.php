<?php
include('koneksi.php');
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $sql = "UPDATE tbl_mahasiswa SET nama='$nama', alamat='$alamat', jk='$jk', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
