<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Edit Matadiklat</h1>
        </div>
        <div class="col-4">
            <a href="?m=matadiklat&s=tampil" class="btn btn-large btn-info" style="float: right"> Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM matadiklat WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        $r = mysqli_fetch_array($query);
        ?>
        <div class="col">
            <form action="?m=matadiklat&s=update" method="post">
                <div class="mb-2">
                    <label for="">Nama Matadiklat</label>
                    <input type="text" name="matadiklat" value="<?=$r['matadiklat'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">SKS</label>
                    <input type="number" name="sks" value="<?=$r['sks'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?=$r['id'];?>">
                    <input type="reset" class="btn btn-info">&nbsp;
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>        
    </div>
</section>