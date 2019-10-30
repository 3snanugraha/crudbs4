<?php
include"koneksi.php";
$simpan=mysqli_query($koneksi,"INSERT INTO t_admin (username,password,nama_admin) VALUES ('$_POST[username]','$_POST[password]','$_POST[nama_admin]')");

if($simpan){
header("location:data-admin.php");
}else{
echo"<p>Gagal menyimpan</p><a href='tambah-admin.php'>Kembali</a>";

}
?>