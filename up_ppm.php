<?php
//koneksi
session_start();
include("koneksi.php");


if($id_ppm = $_POST['id_ppm']) {
	$ppm_akhir = $_POST['ppm'];
	$id_tanaman = $_POST['id_tanaman'];
	$b=$koneksi->query("select * from ppm inner join set_poin on ppm.id_tanaman = set_poin.id_tanaman where ppm.id = '".$id_ppm."' and ppm.id_tanaman = set_poin.id_tanaman limit 1");
	while ($row2 = $b->fetch_array()){
	$ppm_awal  = $row2[3];
	}
		if($ppm_akhir > $ppm_awal){
		$persen_up = (($ppm_akhir-$ppm_awal)/$ppm_akhir)*100;
		$ppm_naik = 'ppm tanaman dinaikkan';
		$sql2 =$koneksi->query("update ppm set ppm='".$ppm_akhir."', ppm_before='".$ppm_awal."',action='".$ppm_naik."', nilai ='".$persen_up."',waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_ppm."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$ppm_naik."','".$persen_up."',CURRENT_TIMESTAMP())");
		echo "<script>alert('PPM tanaman dengan id= ".$id_ppm." berhasil dinaikkan ".$persen_up."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else if($ppm_akhir < $ppm_awal) {
		$persen_down = (($ppm_awal-$ppm_akhir)/$ppm_awal)*100;
		$ppm_turun = 'ppm tanaman diturunkan';
		$sql2 =$koneksi->query("update ppm set ppm='".$ppm_akhir."', ppm_before='".$ppm_awal."',action='".$ppm_turun."', nilai ='".$persen_down."', waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_ppm."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$ppm_turun."','".$persen_down."',CURRENT_TIMESTAMP())");
		echo "<script>alert('PPM tanaman dengan id= ".$id_ppm." berhasil diturunkan ".$persen_down."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else {
		echo "<script>alert('PPM tanaman dengan id= ".$id_ppm." telah sesuai') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	}
}

?>