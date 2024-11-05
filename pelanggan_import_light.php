<?php
include('sambungan.php');
$namajadual = $_POST['namajadual'];
$namafail = $_FILES['namafail']['name'];


$fail = fopen($namafail,"r");
while (!feof($fail)) {
	$medan = explode(",",fgets($fail));
		if ($namajadual === "pelanggan"){
			$notel = $medan[0];
			$nama = $medan[1];
			$sql ="insert into pelanggan values('$notel','$nama')";
			if(mysqli_query($sambungan,$sql))
				$berjaya = true;
			else 
				$berjaya = false;
}

}
	if($berjaya==true)
		 echo"<script>alert('Rekod Berjaya Diimport');</script>";
	else
		 echo"<script>alert('Rekod Tidak Berjaya Diimport');</script>";
	echo"<script>window.location='pelanggan_senarai_light.php'</script>";
	mysqli_close($sambungan);
	?>