<?php
include"koneksi.php";
$simpan=mysqli_query($koneksi,"INSERT INTO t_pelanggan (username,password,nama_pelanggan,alamat,no_hp,tanggal_daftar) VALUES ('$_POST[username]','$_POST[password]','$_POST[nama_pelanggan]','$_POST[alamat]','$_POST[no_hp]','$_POST[tanggal_daftar]')");

if($simpan){
header("location:data-pelanggan.php");
}else{
echo"<p>Gagal menyimpan</p><a href='tambah-pelanggan.php'>Kembali</a>";

}
?>