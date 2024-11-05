<?php
include('sambungan.php');
if(isset($_POST['username_form'])) {
    $username = $_POST['username_form'];
    $namastaf = $_POST['namastaf_form'];
    $password = $_POST['password_form'];
	$sql = "insert into staf  values('$username','$namastaf','$password')";
	$result = mysqli_query($sambungan,$sql);
	if($result)
		echo "<script>alert('Berjaya Mendaftar Staf')</script>";
	else
		echo "<script>alert('Tidak Berjaya Mendaftar Staf')</script>";
	echo "<script>window.location='login.php'</script>";
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="borang_light.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
      rel="stylesheet"
    />
    <title>Daftar Baharu</title>
  </head>
  
  <body>

    <div class="header">
      <div class="title">SISTEM PENGURUSAN PEMBELIAN TIKET WAYANG VIRULENT SCREEN CINEMA</div>
  </div>
  
    <main>
    <div class="content">
        <div class="title">DAFTAR BAHARU</div>
        
    </div>
    
    
		<div class="table">
      <form action="signup.php" method="post">
        <table>
          <tr>
            <td>Username</td>
            <td><input type="text" name="username_form" placeholder="Username"></td>
          </tr>
          <tr>
            <td>Nama Staf</td>
            <td><input type="text" name="namastaf_form" placeholder="Nama Staf"></td>
          </tr>
          <tr>
            <td>Kata Laluan</td>
            <td><input type="text" name="password_form" placeholder="Kata laluan"></td>
          </tr>
        </table>
      <button type="submit">DAFTAR BAHARU</button>
      <a href="login.php" class="button">LOG MASUK</a>
      </form>
    </div>


    <div class="footer">
      &copy; Hak cipta terpelihara Virulent Screen Cinema
    </div>
    </main>
  </body>
    
</html>	