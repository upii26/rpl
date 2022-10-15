<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="editakun.css">


	<title>TOKO JAYA ABADI</title>

</head>
<body>

	<script>
	<?php


		$arrayjabatan[0]="Pemilik Toko";
		$arrayjabatan[1]="Kasir";
		$arrayjabatan[2]="Karyawan Gudang";

		$var_jabatan ="";
		for ($i=0; $i<=2; $i++) {
			$var_jabatan = $var_jabatan."<option value=".$arrayjabatan[$i].">".$arrayjabatan[$i]."</option>";
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
		 		<div class="dashboard" >
		 		<h4>Dashboard</h4>
		 		<img src="Dashboard.png">
		 		</div>
		 		</a>

		 		<div class="editakun">
		 			<h4 >Edit Akun</h4>
		 		<img src="user.png">
		 		</div>

		 		<a href="home.php" style="text-decoration: none;">
		 		<div class="logout">
		 			
		 			<h4>Logout</h4>

		 		<img src="Logout.png">
		 		</div>
		 		</a>
		 		</div>


		 		</div>
		 </div>

		 <div class="content">
		 	<h4>Edit Akun</h4>
		 	
		 		
		 	</div>
		 		<div class="data-table ">

	 <table class="table" cellspacing="20"  >
			  <thead >
			    <tr >
			      <th scope="col">ID_Pengguna</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Jabatan</th>
			      <th scope="col">No Telpon</th>
			      <th scope="col">Username</th>
			    </tr>
			  </thead>
			  <tbody>

			    <tr>
			      <th scope="row">1</th> 
			      <td>putri</td>	
			      <td>Pemilik</td> 
			      <td>0813331280</td> 
			      <td>Agustina</td> 
			       <td ><a href="#edit"><button class="edit">Edit</button></a></td>
			      <td ><a href="#hapus"><button class="hapus">Hapus</button></a></td>
			     <td><a href="#view"><button class="view">View</button></a></td>
			    </tr>
			    <tr>
			      <th scope="row">2</th> 
			      <td>Toni</td>
			      <td>Pemilik</td>
			      <td>0813123234</td>
			      <td>Tonias</td>
			      <td ><a href="#edit"><button class="edit">Edit</button></a></td>
			      <td ><a href="#hapus"><button class="hapus">Hapus</button></a></td>
			     <td><a href="#view"><button class="view">View</button></a></td>
			    <tr>
			      <th scope="row">3</th>
			      <td >Tadeo</td> 
			      <td>K.Gudang</td>
			      <td>0876771213</td>
			      <td>Vincentius</td>
			       <td ><a href="#edit"><button class="edit">Edit</button></a></td>
			      <td ><a href="#hapus"><button class="hapus">Hapus</button></a></td>
			     <td><a href="#view"><button class="view">View</button></a></td>
			    </tr>

			    <tr>
			    	<th scope="row">8</th>
			    	<td>Danil</td>
			    	<td>K.Gudang</td>
			    	<td>08651223</td>
			    	<td>Daniel</td>
			      <td ><a href="#edit"><button class="edit">Edit</button></a></td>
			      <td ><a href="#hapus"><button class="hapus">Hapus</button></a></td> 
			      <td><a href="#view"><button class="view">View</button></a></td>
			    </tr>

			    <tr>
			    	<th scope="row">11</th>
			    	<td>Dora</td>
			    	<td>Kasir</td>
			    	<td>08562123</td>
			    	<td>Doraexplor</td>
			      <td ><a href="#edit"><button class="edit">Edit</button></a></td>
			      <td ><a href="#hapus"><button class="hapus">Hapus</button></a></td> 
			      <td><a href="#view"><button class="view">View</button></a></td>

			    </tr>

			    <tr >
			    	<th scope="row">13</th>
			    	<td>Agus</td>
			    	<td>Kasir</td>
			    	<td>0567123900</td>
			    	<td>Agustinus</td>
			    	 <td ><a href="#edit"><button class="edit">Edit</button></a></td>
			      	<td ><a href="#hapus"><button class="hapus">Hapus</button></a></td> 
			       <td><a href="#view"><button class="view">View</button></a></td>
			    </tr>

			  </tbody>
			</table>
			<p class="background"></p>				
		 	</div>
		 	
		 	<button class="tambah-akun"><a href="#tambah" style="text-decoration:none; color:black;">Tambah Akun</a></button>
				
				<div class="view-popup" id="view">
					<div class="popup-content">
						<h2>View</h2>
						<h4>Profile</h4>
						<a href="#" class="popup-close" style="color: white;">x</a>
						<img src="profile.png">
						<ul>
							<li>Nama</li>
							&emsp;
							<li>Nama Lengkap</li>
							&emsp;
							<li>No Telpon</li>
							&emsp;
							<li>Jabatan</li>
							&emsp;
							<li>Email</li>
							&emsp;
							<li>Username</li>
							&emsp;
							<li>Password</li>
						</ul>
					</div>
					
				</div>

				<div class="hapus-popup" id="hapus">
					<div class="hapus-content">
						<h1>Hapus</h1>
						<p>Anda yakin ingin menghapus akun? </p>
						<button class="button-batal"><a style="text-decoration:none; color: black;"href="#">Batal</a></button>
						<button class="button-ya"><a style="text-decoration:none; color: black;"href="#notif">Ya</a></button>

					</div >
						
					<div class="notif-popup" id="notif"><a href="#" class="popup-exit" style="color: white; text-decoration: none;">
						<div class="notif-content">
							<h1>Akun Telah Di Hapus </h1>

					</div>
						</a>
				</div>

				<div class="edit-popup" id="edit">
					<div class="edit-content">
						<h1>Edit Akun</h1>
					<li>
						<ul>Nama</ul>
						<input type="text" name="nama">
						<ul>No Telpon</ul>
						<input type="text" name="tlp">
						<ul>Nama Lengkap</ul>
						<input type="text" name="namalengkap">
						<ul>Email</ul>
						<input type="text" name="email">
					</li>

					<div class="list">
					<li>
						<ul>Jabatan</ul>
						<select type="text" name="nama" ><?php echo $var_jabatan; ?></select>
						<ul>Username</ul>
						<input type="text" name="tlp">
						<ul>Password</ul>
						<input type="text" name="namalengkap">
					</li>
					
					</div>	
				<button class="button-cancel"><a style="text-decoration:none; color: black;"href="#">Batal</a></button>
						<button class="button-simpan"><a style="text-decoration:none; color: black;"href="#notif-edit">Simpan</a></button>
				</div>

					<div class="notif-popup" id="notif-edit"><a href="#" class="popup-exit" style="color: white; text-decoration: none;">
						<div class="notif-content">
						<h1>Akun Berhasil Di Edit</h1>
					</div>
						</a>
			</div>	

			<div class="tambah-popup" id="tambah">
					<div class="tambah-content">
						<h1>Edit Akun</h1>
					<li>
						<ul>Nama</ul>
						<input type="text" name="nama">
						<ul>No Telpon</ul>
						<input type="text" name="tlp">
						<ul>Nama Lengkap</ul>
						<input type="text" name="namalengkap">
						<ul>Email</ul>
						<input type="text" name="email">
					</li>

					<div class="list">
					<li>
						<ul>Jabatan</ul>
						<select type="text" name="nama" ><?php echo $var_jabatan; ?></select>
						<ul>Username</ul>
						<input type="text" name="tlp">
						<ul>Password</ul>
						<input type="text" name="namalengkap">
					</li>
					
					</div>	
				<button class="button-cancel"><a style="text-decoration:none; color: black;"href="#">Batal</a></button>
						<button class="button-simpan"><a style="text-decoration:none; color: black;"href="#notif-tambah">Simpan</a></button>
				</div>

					<div class="notif-popup" id="notif-tambah"><a href="#" class="popup-exit" style="color: white; text-decoration: none;">
						<div class="notif-content">
						<h1>Akun Berhasil Di Tambah</h1>
					</div>
						</a>
			</div>	

					
				</div>
 

</body>
</html>