<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Barang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tabel_awal WHERE id_barang ='" . $_GET ['id_barang'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Barang</td> <td><?= $data['id_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Barang</td> <td><?= $data['jenis_barang'] ?></td>
                        </tr>
						<tr>
                            <td>Diskon</td> <td><?= $data['diskon'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Diskon</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Awal</td> <td><?= $data['harga_awal'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Setelah Diskon</td> <td><?= $data['harga_akhir'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['Keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=data&actions=tampil1" class="btn btn-success btn-sm">
                        Kembali ke Data Awal </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

