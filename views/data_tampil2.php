<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Sembako</h3>
                </div>
                <div class="table-responsive">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th width="30%">ID BARANG</th><th>Nama Barang</th><th>Jenis Barang</th><th>Diskon</th><th>Tanggal Diskon</th><th>Harga Awal</th><th>Harga Setelah Diskon</th><th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tabel_akhir";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td width="10%" ><?= $data['id_barang'] ?></td>
                                    <td width="10%"  width="50%" ><?= $data['nama_barang'] ?></td>
                                    <td width="10%" ><?= $data['jenis_barang'] ?></td>
                                    <td width="10%" ><?= $data['diskon'] ?></td>
                                    <td width="10%" ><?= $data['tanggal'] ?></td>
                                    <td width="10%" ><?= $data['harga_awal'] ?></td>
                                    <td width="10%" ><?= $data['harga_akhir'] ?></td>
                                    <td width="10%" ><?= $data['Keterangan'] ?></td>
                                    <td  >
                                        <a href="?page=data&actions=detail&id_barang=<?= $data['id_barang'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                       
                                        <a href="?page=data&actions=delete&id_barang=<?= $data['id_barang'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                         
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

