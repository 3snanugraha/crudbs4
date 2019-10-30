<?php
include"koneksi.php";
$simpan=mysqli_query($koneksi,"INSERT INTO t_kategori (nama_kategori) VALUES ('$_POST[nama_kategori]')");

if($simpan){
header("location:data-kategori.php");
}else{
echo"<p>Gagal menyimpan</p><a href='tambah-kategori.php'>Kembali</a>";

}
?>