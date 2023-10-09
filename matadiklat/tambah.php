<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Tambah Matadiklat</h1>
        </div>
        <div class="col-4">
            <a href="?m=matadiklat&s=tampil" class="btn btn-large btn-info" style="float: right"> Kembali</a>
        </div>
        <div class="col">
            <form action="?m=matadiklat&s=simpan" method="post">
                <div class="mb-2">
                    <label for="">Nama Matadiklat</label>
                    <input type="text" name="nama_md" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">sks</label>
                    <input type="number" name="sks" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="reset" class="btn btn-info">&nbsp;
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>        
    </div>
</section>