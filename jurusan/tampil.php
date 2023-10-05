<div class="content">
  <div class="row">
    <a href="?m=jurusan&s=tambah" class="btn btn-info">Tambah Jurusan</a>
    <h2>Modul Jurusan</h2>
    <table class="table table-bordered tabel-hover tabel-striped">
        <thead>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Kapasitas</th>
            <th>Terisi</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            include_once ('koneksi.php');
            $sql ='SELECT * FROM jurusan';
            $query = mysqli_query($koneksi, $sql);
            if (mysqli_num_rows($query)==0) {
                echo "<tr><td colspan='5'>Data Kosong</td></tr>";
            }else {
                $no =1;
                while ($r =mysqli_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>". $r['nama_jurusan']."</td>";
                    echo "<td>". $r['kapasitas']."</td>";
                    echo "<td>". $r['terisi']."</td>";
                    echo '<td><a href="?m=jurusan&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                        <a href="?m=jurusan&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Menghapus Jurusan akan menghilangkan SEMUA data siswa yang ada pada Jurusan tersebut, yakin Jurusan ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                        $no++;

                }
            }

            ?>
        </tbody>
    </table>
  </div>  
</div>