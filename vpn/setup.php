<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="two">
		<script src="ipCheckValidation.js"></script>
		<style>

			
		</style>
	</head>
	
	<body>

		


		<ul class="list2">
			<li style="float:left;"><a class="l1" href="#home">Home</a></li>
			<li style="float:left;margin-left:35%"><a class="l1" href="#news"><img src="strongswan12.png"width="50" height="25">Virtual Private Network</a></li>
			<li style="float:right"><a class="l1 active" href="#about">About</a></li>
		</ul>
		<ul class="list1">
			<li ><a  href="welcome.php">Welcome</a></li>
			<li ><a class="active" href="setup.php">Setup</a></li>
			
			<li><a href="run">Run</a></li>
		</ul>

		<form name = "form1" style="margin-left:15%;padding:1px 16px;" action="confirm.php" method="post">

			<br>
			<br>
			<br>
			<table style="width:100%">
				<tr>
					
					<th>YOUR LEFT VPN SERVER</th>
					<th>YOUR RIGHT VPN SERVER</th>
				</tr>
			</table>
			<br>
			<table style="width:100%">
				<tr>
					<th>YOUR IP</th>
					<th><input class="input animate-input" type="text"  name="left_ip" required></th>
					
					<th>YOUR RIGHT VPN SERVER</th>
					<th><input class="input animate-input" type="text"  name="right_ip" required></th>
					
				</tr>
				<tr>
					<th>YOUR LEFT SUBNET</th>
					<th><input class="input animate-input" type="text"  name="left_subnet" required></th>
					
					<th>YOUR RIGHT SUBNET</th>
					<th><input class="input animate-input" type="text"  name="right_subnet" required></th>
					
				</tr>
			</table>
			<br>
			<table style="width:50%;margin-left:25%;padding:1px 16px;">
				<tr>
					<th></th>
					<th>LIFETIME</th>
					<th><input class="input animate-input" type="text"  name="lifetime" required></th>
					
					<th></th>
				</tr>
				<tr>
					<th></th>
					<th>YOUR PRE SHARED KEY</th>
					<th><input class="input animate-input" type="password"  name="preshared" required></th>
					
					<th></th>
				</tr>
			</table>
			<br>
			<table style="width:100%">
				<tr>
					<th><input type="submit" class ="button button1" value="PROCEED" name="Submit" onclick="ValidateIPaddress(document.form1.left_ip)"></th>
				</tr>
			</table>
		</form>
		
		</body>
</html>
