<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aplikasi Pendataan Mahasiswa Fasilkom</title>
    <link rel="icon" href="img/Fasilkom unsub.PNG" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header class="banner">
        <img src="img/Fasilkom unsub.PNG" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
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
            <h2>Form Input Data</h2>
            <article>
                <div class="form1">
                    <form action="proses_input.php" method="post">
                        <div class="grup">
                            <label for="nama">Nama :</label>
                            <input type="text" name="nama" placeholder="Nama Lengkap" />
                        </div>
                        <div class="grup">
                            <label for="alamat">Alamat :</label>
                            <textarea name="alamat"></textarea>
                        </div>
                        <div class="grup">
                            <label for="jk">Jenis Kelamin :</label>
                            <label><input type="radio" name="jk" value="Laki-laki"> Laki-laki</label>
                            <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
                        </div>
                        <div class="grup">
                            <label for="agama">Agama :</label>
                            <select name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Atheis</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="grup">
                            <label for="asal_sekolah">Asal Sekolah :</label>
                            <input type="text" name="asal_sekolah" placeholder="Asal Sekolah" />
                        </div>
                        <div class="grup">
                            <input type="submit" value="Simpan" name="simpan">
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </main>
    <aside>
        <h2>Notifikasi</h2>
        <p><?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Berhasil Simpan Data!";
                } else {
                    echo "Data gagal disimpan!";
                }
            ?>
        </p>
    <?php endif; ?></p>
    </aside>
    <footer>
        <p>Kiki Maulana | D1A.22.0403 - <?php echo date('Y') ?></p>
    </footer>
</body>

</html>