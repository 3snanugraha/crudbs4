<?php
include"koneksi.php";
$edit=mysqli_query($koneksi,"UPDATE t_kategori SET 
nama_kategori='$_POST[nama_kategori]',

 WHERE id_kategori='$_POST[id_kategori]'");

if($edit){
header("location:data-kategori.php");
}else{
echo"<p>Gagal menyimpan</p><a href='data-kategori.php'>Kembali</a>";

}

?>