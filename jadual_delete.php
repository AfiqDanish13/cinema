<?php
    include('sambungan.php');
	$idjadual = $_GET['idjadual'];
	$sql = "delete from jadual where idjadual = $idjadual";
	$result = mysqli_query($sambungan,$sql);
	if($result)
		echo "<script>alert('Berjaya Memadam Rekod')</script>";
	else
		echo "<script>alert('Tidak Berjaya Memadam Rekod')</script>";
	echo "<script>window.location='jadual_senarai.php'</script>";
?>