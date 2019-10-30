<?php
include"koneksi.php";
$edit=mysqli_query($koneksi,"UPDATE t_pelanggan SET 
username='$_POST[username]',
password='$_POST[password]',
nama_pelanggan='$_POST[nama_pelanggan]',
alamat='$_POST[alamat]',
no_hp='$_POST[no_hp]',
tanggal_daftar='$_POST[tanggal_daftar]'

 WHERE id_pelanggan='$_POST[id_pelanggan]'");

if($edit){
header("location:data-pelanggan.php");
}else{
echo"<p>Gagal menyimpan</p><a href='data-pelanggan.php'>Kembali</a>";

}

?>