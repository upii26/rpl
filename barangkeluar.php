<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="barangmasuk.css">

	<title>TOKO JAYA ABADI</title>

</head>
<body>

		
		<script >
		
		<?php

		$arraybln[0]="Januari";
		$arraybln[1]="Febuari";
		$arraybln[2]="Maret";
		$arraybln[3]="April";
		$arraybln[4]="MEI";
		$arraybln[5]="JUNI";
		$arraybln[6]="JULI";
		$arraybln[7]="AGUSTUS";
		$arraybln[8]="SEPTEMBER";
		$arraybln[9]="OKTOBER";
		$arraybln[10]="NOVEMBER";
		$arraybln[11]="DESEMBER";

		$var_bln ="";
		for ($i=0; $i<=11; $i++) {
			$var_bln = $var_bln."<option value=".$arraybln[$i].">".$arraybln[$i]."</option>";
		}

		$var_thn = "";
		for ($i=2020; $i<=2022; $i++){
			$var_thn = $var_thn."<option value=".$i.">".$i."</option>";
		}

		
		?>
		</script>

		
	 

		
	<header>
		<img src="Logo.png">
		
			<h1>TOKO JAYA ABADI</h1>	
			
		
	</header>


		 <div class="menu " >

		 	<h3>Agustina Putri</h3>
		 	<p>Pemilik toko</p>
		 

		 		<div class="pilihan">

		 		<a href="dashboard.html" style="text-decoration: none;">	
		 		<div class="dashboard">
		 		<h4>Dashboard</h4>
		 		<img src="Dashboard.png">
		 		</div>
		 		</a>


		 		<div class="barangmasuk">
		 			<h4 class="txt-laporan">Laporan Penjualan</h4>
		 		<img src="BarangMasuk.png">
		 		</div>

		 		<a href="home.php" style="text-decoration: none;">
		 		<div class="logout">
		 			<h4>Logout</h4>
		 		<img src="Logout.png">
		 		</div>
		 		</div>
		 		</a>

		 		</div>
		 </div>

		 <div class="content">
		 	<h4>Barang Keluar -> Laporan Penjualan</h4>
		 	<p>Cari Laporan Perbulan</p>
		 		<div class="">

		 			<div class="time">
		 				<p>Pilih Bulan</p>
		 				<p>Pilih Tahun</p>
		 			</div>
		 			<div class="tanggal">
		 			<select class="bln"><?php echo $var_bln; ?></select>
		 				<select class="thn"><?php echo $var_thn; ?></select>
		 				
		 				<input type="txt" style="" placeholder="Search " name="">

		 				<div class="tabel" style="color: #22ACFA;" >
		 			<table border="1px" cellpadding="9px" >
		 				<tr style="background-color:#22ACFA; color: black;">
		 					
		 					<th >Tanggal</th>
		 					<th>No Transaksi</th>
		 					<th>Kasir</th>
		 					<th>Id barang</th>
		 					<th>Nama Barang</th>
		 					<th>Stok</th>
		 					<th>Jumlah</th>
		 					<th>Stock</th>
		 					<th>Total Harga Beli</th>
		 					<th>Laba</th>
		 				</tr>

		 				<tr>
		 					
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>

		 				</tr>
		 				<tr>
		 					
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>

		 				</tr><tr>
		 					
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>

		 				</tr>
		 				<tr>
		 					
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>

		 				</tr>
		 				<tr>
		 					
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>

		 				</tr>

		 				<tr >
		 					<td colspan="3" style="text-align: center; color:black;"> Total </td>
		 					
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					<td> </td>
		 					
		 				</tr>

		 			</table>
		 		</div>

		 				<button class="cetakpdf">Cetak PDF</button>
		 			</div>
		 		</div>

		 		<div>

		 		</div>

		 	
		 	
		 </div>



			
			
			

</body>
</html>