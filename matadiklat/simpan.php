<?php
if (isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $matadiklat   = $_POST['matadiklat'];
    $sks = $_POST['sks'];

    $sql = "INSERT INTO matadiklat SET matadiklat='$matadiklat', sks='$sks'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location:index.php?m=matadiklat&s=tampil');
        //echo "berhasil";
    } else {
        include "index.php?m=matadiklat&s=tampil";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
