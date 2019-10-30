<?php
include"koneksi.php";
$simpan=mysqli_query($koneksi,"INSERT INTO t_barang (id_kategori,nama_barang,satuan,harga_beli,harga_jual,stok,keterangan,foto) VALUES ('$_POST[id_kategori]','$_POST[nama_barang]','$_POST[satuan]','$_POST[harga_beli]','$_POST[harga_jual]','$_POST[stok]','$_POST[keterangan]','$_POST[foto]')");

if($simpan){
header("location:data-barang.php");
}else{
echo"<p>Gagal menyimpan</p><a href='form_input_barang.php'>Kembali</a>";

}
?>