<?php
if(isset($_GET['id'])){
 include_once('koneksi.php');
 $nama_siswa = $_POST['nama_siswa'];
 $kapasitas = $_POST['kapasitas'];
 $terisi = $_POST['terisi'];
$id = $_GET['id'];
 $sql="DELETE FROM siswa WHERE id= '$id'";
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