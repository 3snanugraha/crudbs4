<?php
include"koneksi.php";
$edit=mysqli_query($koneksi,"UPDATE t_admin SET 
username='$_POST[username]',
password='$_POST[password]',
nama_admin='$_POST[nama_admin]'

 WHERE id_admin='$_POST[id_admin]'");

if($edit){
header("location:data-admin.php");
}else{
echo"<p>Gagal menyimpan</p><a href='data-admin.php'>Kembali</a>";

}

?>