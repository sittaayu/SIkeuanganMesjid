<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE id_pengeluaran='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pengeluaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nope" class="col-sm-3 control-label">Jumlah Pengeluaran</label>
                             <div class="col-sm-9">
								<input type="text" name="jml_pengeluaran" value="<?=$data['jumlah_pengeluaran']?>"class="form-control" id="inputEmail3" placeholder="Jumlah Pengeluaran" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_pengeluaran" class="col-sm-3 control-label">Tanggal Pengeluaran</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_pengeluaran" value="<?=$data['tanggal']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Pengeluaran">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pgjwb" class="col-sm-3 control-label">Penanggung Jawab</label>
                            <div class="col-sm-9">
                                <input type="text" name="penangjawab" value="<?=$data['penerima']?>" class="form-control" id="inputPassword3" placeholder="Penanggung Jawab">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pengeluaran</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengeluaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pengeluaran
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $jml_pengeluaran=$_POST['jml_pengeluaran'];
    $tgl_pengeluaran=$_POST['tgl_pengeluaran'];
    $ket=$_POST['ket'];
    $penangjawab=$_POST['penangjawab'];
    //buat sql
    $sql="UPDATE pengeluaran SET jumlah_pengeluaran = '$jml_pengeluaran', tanggal='$tgl_pengeluaran',
	keterangan='$ket', penerima='$penangjawab' WHERE id_pengeluaran='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Pengeluaran Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengeluaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



