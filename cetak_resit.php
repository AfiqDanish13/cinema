<?php
    include('sambungan.php');
	$idpembelian = $_GET['idpembelian_form'];
    $sql = "select * from pembelian join pelanggan on pembelian.notel = pelanggan.notel join jadual on pembelian.idjadual = jadual.idjadual join filem on jadual.idfilem = filem.idfilem join bilik on jadual.idbilik = bilik.idbilik where $idpembelian=$idpembelian";
	$data = mysqli_query($sambungan,$sql);
$pembelian = mysqli_fetch_array($data);
$kuantiti = $pembelian['kuantiti'];
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cetak Resit</title>
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
    
    .invoice-box table tr.total td:nth-child(4) {
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
    
    .rtl table tr td:nth-child(4) {
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
                <td colspan="4">
                    <table>
                        <tr>
							<td><i class="fa fa-angle-double-right" aria-hidden="true" "></i></td>
                            <td class="title" >VIRULENT SCREEN CINEMA</td>
                            
                            <td>
                                IDPembelian: <?php echo ($pembelian['idpembelian']); ?><br>
								
                                Tarikh: <?php echo date("d/m/y", strtotime($pembelian['tarikhpembelian'])); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                Virulent Screen Cinema<br>
                                91000 Jalan Apas<br>
                                Tawau, Sabah
                            </td>
                            
                            <td>
								Pembeli:
                                <?php echo ($pembelian['nama']); ?><br>
                                <?php echo ($pembelian['notel']); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Filem
                </td>
                
				<td>
                    Kuantiti
				</td>

				<td>
                    No. Tempat Duduk
				</td>
				
				<td>
                    Harga
                </td>
            </tr>
            
            <tr class="item">
                <td>
				<?php echo ($pembelian['tajuk']); ?><br>
				</td>
				
				<td>
				<?php echo ($pembelian['kuantiti']); ?><br>
</td>
<td>
				<?php echo ($pembelian['notempatduduk']); ?><br>
</td>
                <td>
				RM <?php echo ($pembelian['harga']); ?><br>
                </td>
            </tr>

			
            <tr class="total">
				<td></td>
				<td></td>
				<td></td>
                <td>
				   Jumlah: RM <?php $jumlah_bayaran = $pembelian['harga'] * $kuantiti;
				   echo number_format($jumlah_bayaran,2);?><br>
				   
                </td>
			</tr>
        </table>
    </div>
    <div class="print">
    <img src="printer.png" onclick="window.print()">
    </div>
</body>
</html>