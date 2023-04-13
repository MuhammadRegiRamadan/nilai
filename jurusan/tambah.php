<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Jurusan</h1>
        </div>
        <div class="col-4">
            <a href="?m=jurusan&s=tampil" class="btn btn-large btn-info" style="float:right">Kembali</a>
        </div>
        <div class="col">
            <form action="?m=jurusan&s=simpan" method="post">
                <div class="mb-2">
                    <label for="">Nama Jurusan</label>
                    <input type="text" name="jurusan" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Kapasitas</label>
                    <input type="text" name="kapasitas" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Terisi</label>
                    <input type="text" name="terisi" class="form-control">
                </div>
                <div class="mb-2">                    
                   <input type="reset" class="btn btn-info">&nbsp;
                   <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>