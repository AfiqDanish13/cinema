<?php
    include('sambungan.php');
	$idpembelian = $_GET['idpembelian_form'];
	$sql = "delete from pembelian where idpembelian = $idpembelian";
	$result = mysqli_query($sambungan,$sql);
	if($result)
	echo "<script>alert('Berjaya Memadam Rekod')</script>";
	else
	echo "<script>alert('Tidak Berjaya Memadam Rekod')</script>";
	echo "<script>window.location='pembelian_senarai_light.php'</script>";
?>