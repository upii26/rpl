<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Sembako</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script >

			function startTime() {
			  const today = new Date();
			  let h = today.getHours();
			  let m = today.getMinutes();
			  let s = today.getSeconds();
			  m = checkTime(m);
			  s = checkTime(s);
			  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
			  setTimeout(startTime, 1000);
			}

			function checkTime(i) {
			  if (i < 10) {i = "0" + i};  
			  return i;
			}

			<?php


			?>
	</script>


	
</head>
<body onload="startTime()">
	
	<div class="header">
	<a href="home.html">TOKO SEMBAKO JAYA ABADI</a>	
	</div>


	<div class="login">
	<p>Login User</p>
	</div>

	<div class="lupa">
		<a href="" style="color: white; text-decoration: none;" >forget password</a>
	</div>

	<div >
		<input type="text" placeholder="Username" class="username">
		<input type="password" placeholder="password" class="password">
		
	</div>

	<div>
		<button type="" class="submit"><a style="color: royalblue; text-decoration: none;" href="dashboard.html">Login</a></button>
	</div>
		
			<p class="jam" id="txt"></p>

			<img class="logo" src="Logo.png">
				
				


</body>
</html>