<?php
include('sambungan.php');
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="senarai.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <title>Senarai Jadual Penayangan</title>
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
            <svg
              class="theme-icon"
              id="solarIcon"
              aria-hidden="true"
              focusable="false"
              data-prefix="fad"
              data-icon="sun"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
              class="svg-inline--fa fa-sun fa-w-16 fa-7x"
            >
              <g class="fa-group">
                <path
                  fill="currentColor"
                  d="M502.42 240.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.41-94.8a17.31 17.31 0 0 0-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4a17.31 17.31 0 0 0 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.41-33.5 47.3 94.7a17.31 17.31 0 0 0 31 0l47.31-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3a17.33 17.33 0 0 0 .2-31.1zm-155.9 106c-49.91 49.9-131.11 49.9-181 0a128.13 128.13 0 0 1 0-181c49.9-49.9 131.1-49.9 181 0a128.13 128.13 0 0 1 0 181z"
                  class="fa-secondary"
                ></path>
                <path
                  fill="currentColor"
                  d="M352 256a96 96 0 1 1-96-96 96.15 96.15 0 0 1 96 96z"
                  class="fa-primary"
                ></path>
              </g>
            </svg>
            <svg
              class="theme-icon"
              id="darkIcon"
              aria-hidden="true"
              focusable="false"
              data-prefix="fad"
              data-icon="sunglasses"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 576 512"
              class="svg-inline--fa fa-sunglasses fa-w-18 fa-7x"
            >
              <g class="fa-group">
                <path
                  fill="currentColor"
                  d="M574.09 280.38L528.75 98.66a87.94 87.94 0 0 0-113.19-62.14l-15.25 5.08a16 16 0 0 0-10.12 20.25L395.25 77a16 16 0 0 0 20.22 10.13l13.19-4.39c10.87-3.63 23-3.57 33.15 1.73a39.59 39.59 0 0 1 20.38 25.81l38.47 153.83a276.7 276.7 0 0 0-81.22-12.47c-34.75 0-74 7-114.85 26.75h-73.18c-40.85-19.75-80.07-26.75-114.85-26.75a276.75 276.75 0 0 0-81.22 12.45l38.47-153.8a39.61 39.61 0 0 1 20.38-25.82c10.15-5.29 22.28-5.34 33.15-1.73l13.16 4.39A16 16 0 0 0 180.75 77l5.06-15.19a16 16 0 0 0-10.12-20.21l-15.25-5.08A87.95 87.95 0 0 0 47.25 98.65L1.91 280.38A75.35 75.35 0 0 0 0 295.86v70.25C0 429 51.59 480 115.19 480h37.12c60.28 0 110.38-45.94 114.88-105.37l2.93-38.63h35.76l2.93 38.63c4.5 59.43 54.6 105.37 114.88 105.37h37.12C524.41 480 576 429 576 366.13v-70.25a62.67 62.67 0 0 0-1.91-15.5zM203.38 369.8c-2 25.9-24.41 46.2-51.07 46.2h-37.12C87 416 64 393.63 64 366.11v-37.55a217.35 217.35 0 0 1 72.59-12.9 196.51 196.51 0 0 1 69.91 12.9zM512 366.13c0 27.5-23 49.87-51.19 49.87h-37.12c-26.69 0-49.1-20.3-51.07-46.2l-3.12-41.24a196.55 196.55 0 0 1 69.94-12.9A217.41 217.41 0 0 1 512 328.58z"
                  class="fa-secondary"
                ></path>
                <path
                  fill="currentColor"
                  d="M64.19 367.9c0-.61-.19-1.18-.19-1.8 0 27.53 23 49.9 51.19 49.9h37.12c26.66 0 49.1-20.3 51.07-46.2l3.12-41.24c-14-5.29-28.31-8.38-42.78-10.42zm404-50l-95.83 47.91.3 4c2 25.9 24.38 46.2 51.07 46.2h37.12C489 416 512 393.63 512 366.13v-37.55a227.76 227.76 0 0 0-43.85-10.66z"
                  class="fa-primary"
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
      <a href="jadual_senarai_light.php"><i class="fas fa-sun"></i></a> 
    </div>
  
    <main>
    <div class=button>
        <a href="jadual_insert.php" class="btn">Tambah Jadual</a>
       </div>

    <div class="content">
        <div class="title">SENARAI JADUAL</div>
        
    </div>
    
    
		<div class="table">
		<table>
    <tr>
	    <th>Bil</th>
		<th>Tarikh Tayangan</th>
		<th>Masa Tayangan</th>
		<th>Filem</th>
		<th>Durasi</th>
		<th>Poster</th>
		<th>Bilik</th>
		<th>Operasi</th>
	</tr>
<?php 
    // setting tarikh dan masa mengikut zon
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$bil = 1;
	// cantumkan semua table
	$sql = "select * from jadual
	join filem on jadual.idfilem = filem.idfilem
	join bilik on jadual.idbilik = bilik.idbilik";
	
	$data = mysqli_query($sambungan,$sql);
	    while ($cinema = mysqli_fetch_array($data)) {
		$tarikhtayang = date_create($cinema['tarikhtayang']);
?>
    <tr>
	    <td><?php echo $bil?></td>
		<td><?php echo date("d/m/y", strtotime($cinema['tarikhtayang'])); ?></td>
		<td><?php echo $cinema['masatayang']; ?></td>
		<td><?php echo $cinema['tajuk']; ?></td>
		<td><?php echo $cinema['durasi']; ?></td>
		<td><?php echo "<img src='pictures/".$cinema['poster']."' width='100px' height='100px'/>"; ?></td>
		<td><?php echo $cinema['namabilik']; ?></td>
		<td>
		<a href="jadual_update.php?idjadual=<?php echo $cinema['idjadual'];?>">
		<img src=update.png>
		<a href="jadual_delete.php?idjadual=<?php echo $cinema['idjadual'];?>">
		<img src=delete.png>
		</a>
		</td>
	</tr>
	<?php
	$bil = $bil + 1;
		} // while
	?>
</table>
    </div>
    
    

    <div class="footer">
      &copy; Hak cipta terpelihara Virulent Screen Cinema
    </div>
    </main>
  </body>
    
</html>	