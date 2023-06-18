<!DOCTYPE html>
<html lang="en">

<head>
   <title>Aplikasi Pendataan Mahasiswa Fasilkom</title>
   <link rel="icon" href="img/Fasilkom unsub.PNG" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
   <header class="banner">
      <div style="background: rgba(245, 10, 10, 0.1);box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(1000px);webkit-backdrop-filter: blur(10.6px);">

         <img src="img/Fasilkom unsub.PNG" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
         <h1>Aplikasi Pendataan Mahasiswa</h1>
         <p>Fakultas Ilmu Komputer - Sistem Informasi</p>
      </div>
   </header>

   <nav>
      <div style="background: rgba(245, 10, 10, 0.1);box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(1000px);webkit-backdrop-filter: blur(10.6px);">
         <ul class="text-decoration: none">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="input_data.php">Input Data</a></li>
            <li><a href="tentang.php">Tentang Aplikasi</a></li>
         </ul>
      </div>
   </nav>
   <main>
      <section>
         <div style="background: rgba(245, 10, 10, 0);box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(1000px);webkit-backdrop-filter: blur(10.6px);">
            <h2>Data Mahasiswa</h2>
            <article>
               <form action='index.php' method="POST">
                  <input type='text' class="search" value='' name='qcari'>
                  <input type='submit' class="button" value='Cari'>
                  <a href='index.php'>Tampilkan Semua Data</a>
                  <br><small>*Pencarian berdasarkan Nama dan Agama</small>
               </form>
               <br>
               <div></div>
               <table class="table">
                  <tr>
                     <td>No</td>
                     <td>Nama</td>
                     <td>Alamat</td>
                     <td>Jenis Kelamin</td>
                     <td>Agama</td>
                     <td>Sekolah Asal</td>
                     <td>Tindakan</td>
                  </tr>
                  <?php
                  include('koneksi.php');
                  $sql = "SELECT * FROM tbl_mahasiswa ";
                  if (isset($_POST['qcari'])) {
                     $qcari = $_POST['qcari'];
                     $sql = "SELECT * FROM tbl_mahasiswa 
                     where nama like '%$qcari%'
                     or agama like '%$qcari%' ";
                  }
                  $query = mysqli_query($db, $sql);
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                     echo "<tr>";
                     echo "<td>" . $no . "</td>";
                     echo "<td>" . $data['nama'] . "</td>";
                     echo "<td>" . $data['alamat'] . "</td>";
                     echo "<td>" . $data['jk'] . "</td>";
                     echo "<td>" . $data['agama'] . "</td>";
                     echo "<td>" . $data['asal_sekolah'] . "</td>";

                     echo "<td>";
                     echo "<a href='edit_data.php?id=" . $data['id'] . "'>Edit</a> | ";
                     echo "<a href='delete_data.php?id=" . $data['id'] . "'>Hapus</a>";
                     echo "</td>";

                     echo "</tr>";
                     $no++;
                  }
                  ?>
               </table>
            </article>
         </div>
      </section>
   </main>
   <aside>
      <div style="background: rgba(255, 255, 255, 0);border-radius: 16px;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(10.6px);-webkit-backdrop-filter: blur(10.6px);">
         <h2>Jumlah Data</h2>
         <p>Jumlah data sebanyak : <?php echo mysqli_num_rows($query) ?> Orang</p>
      </div>
   </aside>
   <footer>
      <p>Kiki Maulana | D1A.22.0403 - <?php echo date('Y') ?></p>
   </footer>
</body>

</html>