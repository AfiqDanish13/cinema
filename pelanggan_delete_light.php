<?php
    include('sambungan.php');
	$notel = $_GET['notel'];
	$sql = "delete from pelanggan where notel = $notel";
	$result = mysqli_query($sambungan,$sql);
	if($result)
		echo "<script>alert('Berjaya Memadam Rekod')</script>";
	else
		echo "<script>alert('Tidak Berjaya Memadam Rekod')</script>";
	echo "<script>window.location='pelanggan_senarai_light.php'</script>";
?>