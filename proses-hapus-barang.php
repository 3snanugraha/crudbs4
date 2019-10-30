<?php
include"koneksi.php";

$hapus=mysqli_query($koneksi,"DELETE FROM t_barang WHERE id_barang='$_GET[id_barang]'");

if($hapus){
header("location:data-barang.php");
}else{
echo"<p>Gagal menghapus</p><a href='data-barang.php'>Kembali</a>";

}
?>