<?php
include"koneksi.php";

$hapus=mysqli_query($koneksi,"DELETE FROM t_admin WHERE id_admin='$_GET[id_admin]'");

if($hapus){
header("location:data-admin.php");
}else{
echo"<p>Gagal menghapus</p><a href='data-admin.php'>Kembali</a>";

}
?>