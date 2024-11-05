<?php
//SAMBUNGAN KE DATABASE
include('sambungan.php');
//MENDAPATKAN NILAI POST
if (isset($_POST['username_form'])){
    //UBAH NILAI POST KE VARIABLE
    $username = $_POST['username_form'];
    $password = $_POST['password_form'];
    //EXE. PERNYATAAN SQL
    $sql = "SELECT * FROM staf";
    $result = mysqli_query($sambungan, $sql);
    $jumpa = FALSE;
    while($staf = mysqli_fetch_array($result)){
      if($staf["username"]==$username && $staf["password"] == $password)
      $jumpa = TRUE;
    }
    if($jumpa == TRUE)
      //MESEJ YANG AKAN DIPAPARKAN JIKA BERJAYA LOG MASUK 
      echo"<script>alert('Selamat Datang ke SISTEM PENGURUSAN PEMBELIAN TIKET WAYANG VIRULENT SCREEN CINEMA');
      window.location='index_light.html'</script>";
    else  
      //MESEJ YANG AKAN DIPAPARKAN JIKA GAGAL LOG MASUK
      echo"<script> alert ('Kesalahan Pada Username atau Password');
      window.location='login.php'</script>";
}   
?>



<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="borang_light.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <title>Log Masuk</title>
  </head>
  
  <body>

    <div class="header">
      <div class="title">SISTEM PENGURUSAN PEMBELIAN TIKET WAYANG VIRULENT SCREEN CINEMA</div>
  </div>
  <div class="switch">
      <a href="MANUAL PENGGUNA SISTEM PENGURUSAN PEMBELIAN TIKET WAYANG VIRULENT SCREEN CINEMA.pdf" download><i class="fas fa-download"></i></a> 
  </div>
  
    <main>
    <div class="content">
        <div class="title">LOG MASUK</div>
        
    </div>
    
    
		<div class="table">
		<form action=login.php method=post >
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username_form" placeholder="Username" required="" ></td>
        </tr>
        <tr>
          <td>Kata Laluan</td>
          <td><input type="password" name="password_form" placeholder="Password" required="" min-length="7" max-length="10"></td>           
        </tr>
      </table>
    <button type="submit">LOG MASUK</button>
    <a href="signup.php" class="button">DAFTAR BAHARU</a>
    </form>
</div>


    <div class="footer">
      &copy; Hak cipta terpelihara Virulent Screen Cinema
    </div>
    </main>
  </body>
    
</html>	