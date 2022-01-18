<?php
$id_barang=$_GET['id_barang'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tabel_awal WHERE id_barang ='$id_barang'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Sembako</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                         <div class="form-group">
                            <label for="nama_sembako" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_sembako" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jenis_barang" class="col-sm-3 control-label">jenis_barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_barang" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Barang" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="diskon" class="col-sm-3 control-label">Diskon</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jurusan" class="form-control" id="inputEmail3" placeholder="Inputkan Diskon Barang" required>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal Diskon</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Diskon" required>
                            </div>
                        </div>
                           <div class="form-group">
                            <label for="harga_awal" class="col-sm-3 control-label">Harga Awal</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_awal" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Awal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_akhir" class="col-sm-3 control-label">Harga Setelah Diskon</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_akhir"class="form-control" id="inputEmail3" placeholder="Inputkan Harga Setelah Diskon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan Mahasiswa">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Barang</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=mahasiswa&actions=tampil1" class="btn btn-danger btn-sm">
                        Kembali Ke Data Awal
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
     $id_barang=$_POST['id_barang'];
    $nama_barang=$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $diskon=$_POST['diskon'];
    $tanggal=$_POST['tanggal'];
    $harga_awal=$_POST['harga_awal'];
    $harga_akhir=$_POST['harga_akhir']:
    $Keterangan=$_POST['Keterangan'];

    $sql="INSERT INTO tabel_awal VALUES ('$id_barang','$nama_barang','$jenis_barang','$diskon','$tanggal','$harga_awal','$harga_akhir','$Keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=mahasiswa&actions=tampil1');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



