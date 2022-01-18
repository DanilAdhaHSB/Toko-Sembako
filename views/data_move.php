<?php
//membuat query untuk hapus data
 $sql = "SELECT * FROM tabel_awal";
  $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan1 Arsip Error");

 $sql="INSERT INTO tabel_akhir (id_barang,nama_barang,jenis_barang,diskon,tanggal,harga_awal,harga_akhir,keterangan) SELECT * FROM tabel_awal WHERE id_barang ='".$_GET['id_barang']."'";
    //buat sql
   
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");

$sql="DELETE FROM tabel_awal WHERE id_barang ='".$_GET['id_barang']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=data&actions=tampil1');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=arsip&actions=tampil');</scripr>";
}


