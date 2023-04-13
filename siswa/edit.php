<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Edit Siswa</h1>
        </div>
        <div class="col-4">
            <a href="?m=siswa&s=tampil" class="btn btn-large btn-info" style="float:right">Kembali</a>
        </div>
        <div class="col">
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM siswa WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query);
            ?>
            <form action="?m=siswa&s=update" method="post">
                <div class="mb-2">
                    <label for="">Nomor Induk siswa</label>
                    <input type="text" name="nis" value="<?= $r['nis'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Nama siswa</label>
                    <input type="text" name="nama" value="<?= $r['nama'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="<?= $r['tempat_lahir'];?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="<?= $r['tanggal_lahir'];?>" class="form-control">
                </div>
                <?php 
                include_once("config.php");
                $sql2 = "SELECT id, jurusan FROM jurusan ORDER BY jurusan";
                $query2 = mysqli_query($con, $sql2)
                ?>
                <div class="mb-2">  
                    <label for="">Pilih Jurusan</label>
                    <select name="jurusan_id" class="form-control" required>
                        <?php 
                        while($rj=mysqli_fetch_array($query2)){
                        ?>
                        <option value="<?=$rj['id'];?>" <?=$rj['id']==$r['jurusan_id']?'selected':''?>><?=$rj['jurusan'];?></option>
                         <?php } ?>
                    </select>
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
