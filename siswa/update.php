<?php
if(isset($_POST['update'])){
    include_once "koneksi.php";
    $id           = $_POST['id'];
    $nama_siswa = $_POST['nama_siswa'];
    $kapasitas    = $_POST['kapasitas'];
    $terisi       = $_POST['terisi'];

    $sql = "UPDATE siswa SET nama_siswa='$nama_siswa', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=siswa');
        // Var_dump($sql);
        // Cek error
    } else {
        include "index.php?m=siswa";
        echo 'script language="JavaScipt">';
        echo 'alert("Data Gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Pastikan sudah mengisi data dengan benar<a href='index.php'>Kembali</a>";
    echo '<script>window.history.back()</script>';
}
?>