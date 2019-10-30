<?php
include"koneksi.php";

$hapus=mysqli_query($koneksi,"DELETE FROM t_pelanggan WHERE id_pelanggan='$_GET[id_pelanggan]'");

if($hapus){
header("location:data-pelanggan.php");
}else{
echo"<p>Gagal menghapus</p><a href='data-pelanggan.php'>Kembali</a>";

}
?>