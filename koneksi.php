<?php
$host="localhost";
$user="root";
$pass="";
$database="db_tris";

$koneksi = new mysqli($host,$user,$pass,$database);

if (mysqli_connect_errno()){
		trigger_error("Koneksi gagal : ". mysqli_connect_error(), E_USER_ERROR);
		
		}
		
?>