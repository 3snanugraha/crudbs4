<?php
include"koneksi.php";
$edit=mysqli_query($koneksi,"UPDATE t_barang SET 
nama_barang='$_POST[nama_barang]',
id_kategori='$_POST[id_kategori]',
satuan='$_POST[satuan]',
harga_beli='$_POST[harga_beli]',
harga_jual='$_POST[harga_jual]',
stok='$_POST[stok]',
keterangan='$_POST[keterangan]',
foto='$_POST[foto]'
 WHERE id_barang='$_POST[id_barang]'");

if($edit){
header("location:data-barang.php");
}else{
echo"<p>Gagal menyimpan</p><a href='edit-barang.php'>Kembali</a>";

}

?>