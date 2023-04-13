<?php
if (isset($_POST['simpan'])) {
    include "config.php";
    $jurusan = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi   = $_POST['terisi'];
    
    $sql ="INSERT INTO jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi'";
    // INSERT INTO `siswa` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jurusan_id`) VALUES (NULL, '123', 'riz', 'jonggol', '2023-03-15', '1');
    var_dump($sql);
    $simpan = mysqli_query($con, $sql);
    if ($simpan) {
        header('location:index.php?m=jurusan&s=tampil');
        // echo "berhasil";
    }else {
       include "index.php?m=jurusan&s=tampil'";
       echo '<script language="JavaScript">';
       echo 'alert("Data Gagal Ditambahkan."';
       echo '</script>';
    }
}  else {
    echo '<script>windo.history.back()</script>';
}      
      