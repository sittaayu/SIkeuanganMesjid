<?php include 'config/koneksi.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Pemasukan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal " required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Jumlah Uang</label>
                            <div class="col-sm-9">
                                <input type="text" name="jml_uang" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Uang" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Penerima" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ktrngn" class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="simpan" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pemasukan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pemasukan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if(isset($_POST['simpan'])){
    //Ambil data dari form
    $tgl=$_POST['tgl'];
	$jml_uang=$_POST['jml_uang'];
	$penerima=$_POST['penerima'];
	$keterangan=$_POST['ktrngn'];
  
    //buat sql
    $sql="INSERT INTO pemasukan VALUES ('','$tgl','$jml_uang','$penerima','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan pemasukan Error");
    if ($query){
        echo "<script>window.location.assign('?page=pemasukan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
