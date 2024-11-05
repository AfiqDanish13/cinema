<?php
    include('sambungan.php');
	$idfilem = $_GET['idfilem'];
	$sql = "delete from filem where idfilem = $idfilem";
	$result = mysqli_query($sambungan,$sql);
	if($result)
    echo "<script>alert('Berjaya Memadam Rekod')</script>";
	else
    echo "<script>alert('Tidak Berjaya Memadam Rekod')</script>";
	echo "<script>window.location='movie_senarai.php'</script>";
?>