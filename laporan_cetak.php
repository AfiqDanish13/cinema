<?php
include('sambungan.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
$dateNow = date("Y/m/d");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cetak Laporan</title>
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <style>
    .invoice-box {
		max-width: 800px;
		margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 30px rgba(0, 0, 0, .15);
        font-size: 18px;
        line-height: 27px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		color: #555;
    }
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
	}
	.invoice-box table tr td:nth-child(3) {
        text-align: right;
	}
	.invoice-box table tr td:nth-child(4) {
        text-align: right;
    }
    .invoice-box table tr td:nth-child(5) {
        text-align: right;
    }
    .invoice-box table tr td:nth-child(6) {
        text-align: right;
    }
    .invoice-box table tr td:nth-child(7) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
	.invoice-box table tr.top table td.title {
		font-size: 40px;
		font-weight: bold;
		font-family: sans-serif;
        line-height: 45px;
		color: #333;
		text-align: left;

    }
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    .fa-angle-double-right {
    color: red;
	font-size: 50px;
	cursor: pointer;
    }
    .invoice-box table tr.details td {
		padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(7) {
        border-top: 2px solid #eee;
		font-weight: bold;
		text-align: right;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
	}

    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(7) {
        text-align: left;
	}
    .print{
        margin-left: 50%;
        font-size: 50px;
        cursor: pointer;
    }
    </style>

    

</head>

<body>
    <div class="invoice-box">
        
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="7">
                    <table>
                        <tr>
							<td><i class="fa fa-angle-double-right" aria-hidden="true" onclick="window.print()"></i></td>
                            <td class="title" >VIRULENT SCREEN CINEMA</td>
                            
                            <td>
                                Tarikh: <?php echo date ("d/m/Y", strtotime($dateNow)) ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="7">
                    <table>
                        <tr>
                            <td>
                                Virulent Screen Cinema<br>
                                91000 Jalan Apas<br>
                                Tawau, Sabah
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
            <td>
                    Bil.
                </td>
                <td>
                    Filem
                </td>
                <td>
                    Tarikh
				</td>
				<td>
                    Kuantiti
				</td>

				<td>
                    Nama Pembeli
				</td>
				
				<td>
                    Harga
                </td>
                <td>
                    Jumlah
                </td>
            </tr>
            
            <tr class="item">
            <?php
            $syarat = $_GET['syarat'];
            $sql = "select * from pembelian join pelanggan on pembelian.notel = pelanggan.notel join jadual on pembelian.idjadual = jadual.idjadual join filem on jadual.idfilem = filem.idfilem join bilik on jadual.idbilik = bilik.idbilik";

		
	switch ($syarat) {
		case 1 : $syarat = "";
		    $tajuk = "LAPORAN KESELURUHAN"; break;
			case 2 : $syarat = "where pembelian.idfilem = '$idfilem' ";
		    $tajuk = "LAPORAN MENGIKUT FILEM"; break;
		case 3 : $syarat = "where MONTH(masapembelian) = $bulan ";
		    $tajuk = "LAPORAN BULAN $namabulan $tahun"; break;
	}

	$bil = 1;
    $jumlah_keseluruhan = 0;
    $jumlah_keuntungan = 0;
	$peratus_keuntungan = 4/10;
	$sql = $sql.$syarat; // cantum
	$data = mysqli_query($sambungan,$sql);
	    while($pembelian = mysqli_fetch_array($data)){
			$tarikhpembelian = date_create($pembelian['tarikhpembelian']);
      $kuantiti = $pembelian['kuantiti'];
	?>
	<tr>
	    <td><?php echo $bil; ?></td>
		<td><?php echo $pembelian['tajuk']; ?></td>
		<td><?php echo date("d/m/y", strtotime($pembelian['tarikhpembelian'])); ?></td>
		<td><?php echo $pembelian['kuantiti']; ?></td>
		<td><?php echo $pembelian['nama']; ?></td>
		<td>RM <?php echo number_format($pembelian['harga'],2); ?></td>
		<td>RM <?php $jumlah_bayaran = $pembelian['harga'] * $kuantiti;
            echo number_format($jumlah_bayaran,2);
			$jumlah_keseluruhan = $jumlah_keseluruhan + $jumlah_bayaran;
			$jumlah_keuntungan = $peratus_keuntungan*$jumlah_keseluruhan;
			$bil = $bil + 1;
		}
        ?>
            </tr>

			
            <tr class="total">
				<td></td>
				<td></td>
				<td></td>
                <td></td>
				<td></td>
				<td></td>
                <td>
				   Jumlah: RM <?php echo number_format($jumlah_keseluruhan,2);?><br>
				   
                </td>
			</tr>
            <tr class="total">
				<td></td>
				<td></td>
				<td></td>
                <td></td>
				<td></td>
				<td></td>
                <td>
				    Keuntungan: RM <?php echo number_format($jumlah_keuntungan,2);?><br>
				   
                </td>
			</tr>
        </table>
    </div>
    <div class="print">
    <img src="printer.png" onclick="window.print()">
    </div>
</body>
</html>