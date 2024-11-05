<?php 
include('sambungan.php');
if(isset($_POST['notel'])) {
	$notel = $_POST['notel'];
	$nama = $_POST['nama'];  
	$sql = "insert into pelanggan values('$notel','$nama')";
	$result = mysqli_query($sambungan,$sql);
	if($result)
	    echo "<script>alert('Berjaya mendaftar pelanggan')</script>";
	else
	    echo "<script>alert('Tidak berjaya mendaftar')</script>";
	echo "<script>window.location = 'belisekarang_jadual.php'</script>";
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="borang.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <title>Tambah Pelanggan</title>
  </head>
  
  <body>
  <nav class="navbar">
      <ul class="navbar-nav">
        <li class="logo">
          <a href="index.html" class="nav-link">
            <span class="link-text logo-text">VSC</span>
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fad"
              data-icon="angle-double-right"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
              class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
            >
              <g class="fa-group">
                <path
                  fill="currentColor"
                  d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                  class="fa-secondary"
                ></path>
                <path
                  fill="currentColor"
                  d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                  class="fa-primary"
                ></path>
              </g>
            </svg>
          </a>
        </li>
  
        <li class="nav-item">
          <a href="movie_senarai.php" class="nav-link">
            <svg
            aria-hidden="true" 
            focusable="false" 
            data-prefix="fas" 
            data-icon="film" 
            class="svg-inline--fa fa-film fa-w-16" 
            role="img" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 512 512">
            >
              <g class="fa-group">
                <path fill="currentColor" d="M488 64h-8v20c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12V64H96v20c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12V64h-8C10.7 64 0 74.7 0 88v336c0 13.3 10.7 24 24 24h8v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h320v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h8c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24zM96 372c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm272 208c0 6.6-5.4 12-12 12H156c-6.6 0-12-5.4-12-12v-96c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v96zm0-168c0 6.6-5.4 12-12 12H156c-6.6 0-12-5.4-12-12v-96c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v96zm112 152c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40z"
                  class="fa-secondary"
                ></path>
              </g>
            </svg>
            <span class="link-text">Filem</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a href="pelanggan_senarai.php" class="nav-link">
            <svg
            aria-hidden="true" 
            focusable="false" 
            data-prefix="fas" 
            data-icon="user-friends" 
            class="svg-inline--fa fa-user-friends fa-w-20" 
            role="img" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 640 512">
            >
              <g class="fa-group">
                <path
                fill="currentColor" 
                d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z"
                class="fa-secondary"
                ></path>
              </g>
            </svg>
            <span class="link-text">Pelanggan</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a href="jadual_senarai.php" class="nav-link">
            <svg
            aria-hidden="true" 
            focusable="false" 
            data-prefix="fas" 
            data-icon="calendar-alt" 
            class="svg-inline--fa fa-calendar-alt fa-w-14" 
            role="img" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 448 512"
            >
              <g class="fa-group">
                <path
                fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"
                  class="fa-secondary"
                ></path>
              </g>
            </svg>
            <span class="link-text">Jadual</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a href="pembelian_senarai.php" class="nav-link">
            <svg
            aria-hidden="true" 
            focusable="false" 
            data-prefix="fas" 
            data-icon="shopping-cart" 
            class="svg-inline--fa fa-shopping-cart fa-w-18" 
            role="img" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 576 512"
            >
              <g class="fa-group">
                <path
                fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"
                  class="fa-secondary"
                ></path>
              </g>
            </svg>
            <span class="link-text">Pembelian</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="laporan_pilihan.php" class="nav-link">
            <svg
            aria-hidden="true" 
            focusable="false" 
            data-prefix="fas" 
            data-icon="file-invoice" 
            class="svg-inline--fa fa-file-invoice fa-w-12" 
            role="img" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 384 512"
            >
              <g class="fa-group">
                <path
                fill="currentColor" d="M288 256H96v64h192v-64zm89-151L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-153 31V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM64 72c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8V72zm0 64c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16zm256 304c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-200v96c0 8.84-7.16 16-16 16H80c-8.84 0-16-7.16-16-16v-96c0-8.84 7.16-16 16-16h224c8.84 0 16 7.16 16 16z"
                class="fa-secondary"
                ></path>
              </g>
            </svg>
            <span class="link-text">Laporan</span>
          </a>
        </li>
  
        <li class="nav-item" id="themeButton">
          <a href="login.php" class="nav-link">
            <svg
            aria-hidden="true" 
            focusable="false" 
            data-prefix="fas" 
            data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" 
            role="img" xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 512 512"
            >
              <g class="fa-group">
                <path
                fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"
                class="fa-secondary"
                ></path>
              </g>
            </svg>
          
            <span class="link-text">Log Out</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="header">
      <div class="title">SISTEM PENGURUSAN PEMBELIAN TIKET WAYANG VIRULENT SCREEN CINEMA</div>
  </div>
  <div class="switch">
      <a href="belisekarang_pelanggan_light.php"><i class="fas fa-sun"></i></a> 
    </div>
  
    <main>

    <div class="content">
        <div class="title">TAMBAH PELANGGAN</div> 
	</div>
	
    
		<div class="table">
	    <form action="belisekarang_pelanggan.php" method="post" class="pelanggan">
    <table>
	    <tr>
		<td> No Tel </td>
		<td> <input type="text" name="notel" placeholder="013-6732814" required="" maxlength="11" minlength="10"> </td>
		</tr>
		<tr>
		<td> Nama Anda </td>
		<td> <input type="text" name="nama" placeholder="Afiq Danish"> </td>
        </tr>
        <tr>
		</tr>
	</table>
	<button class="save" type="submit">Simpan</button>
	<a href="belisekarang_jadual.php" class="button">Sudah Berdaftar</a>
	</form>
    </div>
    
    

    <div class="footer">
      &copy; Hak cipta terpelihara Virulent Screen Cinema
    </div>
    </main>
  </body>
    
</html>	