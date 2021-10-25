<?php
//koneksi
session_start();
include("koneksi.php");


if($id_ph = $_POST['id_ph']){
	$ph_akhir = $_POST['ph'];
	$id_tanaman = $_POST['id_tanaman'];
	$a=$koneksi->query("select * from ph inner join set_poin on ph.id_tanaman = set_poin.id_tanaman where ph.id = '".$id_ph."' and ph.id_tanaman = set_poin.id_tanaman limit 1");
	while ($row = $a->fetch_array()){
	$ph_awal  = $row[3];
	}
		if($ph_akhir > $ph_awal){
		$persen_up = (($ph_akhir-$ph_awal)/$ph_akhir)*100;
		$ph_naik = 'PH dinaikkan';
		$sql =$koneksi->query("update ph set ph='".$ph_akhir."', ph_before='".$ph_awal."',action='".$ph_naik."', nilai ='".$persen_up."',waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_ph."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$ph_naik."','".$persen_up."',CURRENT_TIMESTAMP())");
		echo "<script>alert('PH tanaman dengan id= ".$id_ph." berhasil dinaikkan ".$persen_up."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else if($ph_akhir < $ph_awal) {
		$persen_down = (($ph_awal-$ph_akhir)/$ph_awal)*100;
		$ph_turun = 'PH diturunkan';
		$sql =$koneksi->query("update ph set ph='".$ph_akhir."', ph_before='".$ph_awal."',action='".$ph_turun."', nilai = '".$persen_down."', waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_ph."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$ph_turun."','".$persen_down."',CURRENT_TIMESTAMP())");
		echo "<script>alert('PH tanaman dengan id= ".$id_ph." berhasil diturunkan ".$persen_down."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else {
		echo "<script>alert('PH tanaman dengan id= ".$id_ph." telah sesuai') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	}
}


//upgrade PPM



	




?>