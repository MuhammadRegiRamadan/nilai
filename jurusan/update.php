<?php
if (isset($_POST['update'])) {
    include "config.php";
    $id        = $_POST['id'];
    $jurusan   = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi    = $_POST['terisi'];

    $sql ="UPDATE jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $simpan = mysqli_query($con,$sql);
    if ($simpan) {
        header('location:index.php?m=jurusan&s=tampil');
        // echo "berhasil";
    }else {
       include "index.php?m=jurusan&s=tampil'";
       echo '<script language="JavaScript">';
       echo 'alert("Data Gagal Diupdate."';
       echo '</script>';
    }
} else {
    echo '<script>windo.history.back()</script>';
}
 

      
      