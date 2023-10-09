<?php
if (isset($_POST['update'])) {
    include "koneksi.php";
    $id        = $_POST['id'];
    $matadiklat   = $_POST['matadiklat'];
    $sks = $_POST['sks'];

    $sql = "UPDATE matadiklat SET matadiklat='$matadiklat', sks='$sks' WHERE id='$id'";
    $simpan = mysqli_query($koneksi, $sql);
    if ($simpan) {
        header('Location:index.php?m=matadiklat&s=tampil');
        //echo "berhasil";
    } else {
        include "index.php?m=matadiklat&s=tampil";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Diupdate.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
