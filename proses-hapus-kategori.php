<?php
include"koneksi.php";

$hapus=mysqli_query($koneksi,"DELETE FROM t_kategori WHERE id_kategori='$_GET[id_kategori]'");

if($hapus){
header("location:data-kategori.php");
}else{
echo"<p>Gagal menghapus</p><a href='data-kategori.php'>Kembali</a>";

}
?>