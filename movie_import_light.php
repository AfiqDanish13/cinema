<?php
include('sambungan.php');
$namajadual = $_POST['namajadual'];
$namafail = $_FILES['namafail']['name'];

$filename = $_FILES['uploadfile']['name'];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        $folder = 'pictures/';

        move_uploaded_file($filetmpname, $folder.$filename);

$fail = fopen($namafail,"r");
while (!feof($fail)) {
	$medan = explode(",",fgets($fail));
        if ($namajadual === "filem"){
			$idfilem = $medan[0];
			$tajuk = $medan[1];
			$poster = $medan[2];
			$durasi = $medan[3];
			$harga = $medan[4];
			$tarikhditambah = $medan[5];
			$sql = "INSERT INTO filem VALUES (NULL,'$tajuk','$filename','$durasi','$harga','$tarikhditambah')";
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
	echo"<script>window.location='movie_senarai_light.php'</script>";
	mysqli_close($sambungan);
	?>