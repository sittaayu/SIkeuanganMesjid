<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pemasukan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pemasukan WHERE id_pemasukan='" . $_GET['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Keuangan Masjid  </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Pemasukan</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								
                                <tr>
                                    <td width="200">Tanggal</td> <td><?= $data['tanggal'] ?></td>
                                </tr>
                               
                                <tr>
                                    <td>Jumlah Uang</td> <td><?= $data['jml_uang'] ?></td>
                                </tr>
								<tr>
                                    <td>Penerima</td> <td><?= $data['penerima'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Ketua Bkm<strong></u><br>
                                        RUSLAN
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>