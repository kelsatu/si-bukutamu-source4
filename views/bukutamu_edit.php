<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_tamu WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Tamu</h3>
                </div>
                <div class="panel-body">
                    <<!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nama Tamu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Tamu" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Asal Instansi</label>
                            <div class="col-sm-9">
                                <input type="text" name="instansi" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Instansi" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Tujuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuan" class="form-control" id="inputEmail3" placeholder="Inputkan Tujuan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal"class="form-control" id="inputEmail3" placeholder="Inputkan Perihal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Tamu</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=bukutamu&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Tamu
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $tanggal=$_POST['tanggal'];
    $nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
    $instansi=$_POST['instansi'];
	$tujuan=$_POST['tujuan'];
    $perihal=$_POST['perihal'];
    //buat sql
    $sql="UPDATE tb_tamu SET tanggal='$tanggal',nama='$nama',alamat='$alamat',instansi='$instansi',tujuan='$tujuan',
	perihal='$perihal' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=bukutamu&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



