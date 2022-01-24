<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pengeluaran</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pengeluaran WHERE id_pengeluaran='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Jumlah Pengeluaran</td> <td><?= $data['jumlah_pengeluaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengeluaran</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                        <td>Penanggung Jawab</td> <td><?= $data['penerima'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=Pengeluaran&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pengeluaran </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

