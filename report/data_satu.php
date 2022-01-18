<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Barang</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tabel_akhir WHERE id_barang ='" . $_GET ['id_barang'] . "'";
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
                       <h2>Sistem Informasi Toko Sembako DHH Market </h2>
                        <h4>Jalan Prof.H.M Yamin No. 173, Kisaran Naga, <br> Kec.Kisaran Timur, Kab.Asahan, Sumatera Utara, 21222</h4>
                        <hr>
                        <h3>DATA BARANG</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                   <td align="left">ID Barang</td> <td align="left"><?= $data['id_barang'] ?></td>
                                </tr>
                                <tr>
                                   <td align="left">Nama Barang</td> <td align="left"><?= $data['nama_barang'] ?></td>
                                </tr>
                               
                                <tr>
                                    <td align="left">Jenis Barang</td> <td align="left"><?= $data['jenis_barang'] ?></td>
                                </tr>
								<tr>
                                    <td align="left">Diskon</td> <td align="left"><?= $data['diskon'] ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Tanggal Diskon</td> <td align="left"><?= $data['tanggal'] ?></td>
                                </tr>
								<tr>
                                   <td align="left">Harga Awal</td> <td align="left"><?= $data['harga_awal'] ?></td>
                                </tr>
								<tr>
                                   <td align="left">Harga Setelah Diskon</td> <td align="left"><?= $data['harga_akhir'] ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Keterangan</td> <td align="left"><?= $data['Keterangan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Toko<strong></u><br>
                                        No.HP 082212345678
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>