<?php
include("koneksi.php");
if (!isset($_GET['id'])) {
   header('Location: index.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 1) {
   die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Aplikasi Pendataan Mahasiswa Fasilkom</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
   <header class="banner">
      <h1>Aplikasi Pendataan Mahasiswa</h1>
      <p>Fakultas Ilmu Komputer - Sistem Informasi</p>
   </header>
   <nav>
      <ul>
         <li><a href="index.php">Beranda</a></li>
         <li><a href="input_data.php">Input Data</a></li>
         <li><a href="tentang.php">Tentang Aplikasi</a></li>
      </ul>
   </nav>
   <main>
      <section>
         <h2>Form Edit Data</h2>
         <article>
            <div class="form1">
               <form action="proses_edit.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                  <div class="grup">
                     <label for="nama">Nama :</label>
                     <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $data['nama'] ?>" />
                  </div>
                  <div class="grup">
                     <label for="alamat">Alamat :</label>
                     <textarea name="alamat"><?php echo $data['alamat'] ?></textarea>
                  </div>
                  <div class="grup">
                     <label for="jk">Jenis Kelamin :</label>
                     <?php $jkel = $data['jk']; ?>
                     <label><input type="radio" name="jk" value="Laki-laki" <?php echo ($jkel == 'Laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                     <label><input type="radio" name="jk" value="Perempuan" <?php echo ($jkel == 'Perempuan') ? "checked" : "" ?>> Perempuan</label>
                  </div>
                  <div class="grup">
                     <label for="agama">Agama: </label>
                     <?php $agama = $data['agama']; ?>
                     <select name="agama">
                        <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                        <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                        <option <?php echo ($agama == 'Lainnya') ? "selected" : "" ?>>Lainnya</option>
                     </select>
                  </div>
                  <div class="grup">
                     <label for="asal_sekolah">Asal Sekolah: </label>
                     <input type="text" name="asal_sekolah" placeholder="nama sekolah" value="<?php echo $data['asal_sekolah'] ?>" />
                  </div>
                  <div class="grup">
                     <input type="submit" value="Simpan" name="simpan" />
                  </div>
               </form>
         </article>
      </section>
   </main>
   <footer>
      <p>Nama Sendiri | NPM - <?php echo date('Y') ?></p>
   </footer>
</body>

</html>