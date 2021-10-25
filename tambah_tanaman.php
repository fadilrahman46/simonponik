<?php
//koneksi
session_start();
include("koneksi.php");


$nm_tanaman = $_POST['nm_tanaman'];
$ph_tanaman = $_POST['ph_tanaman'];
$ppm_tanaman = $_POST['ppm_tanaman'];
$humid_tanaman = $_POST['humid_tanaman'];
$level_tanaman = $_POST['level_tanaman'];
$temp_tanaman = $_POST['temp_tanaman'];


$sql = $koneksi->query("INSERT INTO `set_poin`(`id_tanaman`, `nama_tanaman`, `ph`, `ppm`, `room_humidity`, `water_level`, `water_temperature`, waktu_input) VALUES ('','".$nm_tanaman."','".$ph_tanaman."','".$ppm_tanaman."','".$humid_tanaman."','".$level_tanaman."','".$temp_tanaman."','CURRENT_TIMESTAMP()')");

//$sql2 = $koneksi->query("INSERT into ph (id_tanaman)";

if($sql){ 	
	echo "<script>alert('Data berhasil dimasukkan') </script>";
	echo "<script>window.location.href = \"index.php\" </script>";
		} else { 
		echo "<script>alert('Data Gagal')</script>";
		echo "<script>window.location.href = \"index.php\" </script>";
		}
?>