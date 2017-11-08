<html>
<body>
<?php if(isset ($_POST['Submit']))
{ ?>
  <h3>YOUR IP</h3>
  <input type="text" name="left_ip" value="<?php echo $_POST['left_ip']; ?>" disabled>
  <br>
  <h3>RIGHT IP</h3>
  <input type="text" name="right_ip" value="<?php echo $_POST['right_ip']; ?>" disabled>
  <br>
  <h3>YOUR SUBNET</h3>
  <input type="text" name="left_subnet" value="<?php echo $_POST['left_subnet']; ?>" disabled>
  <br>
  <h3>RIGHT SUBNET</h3>
  <input type="text" name="right_subnet" value="<?php echo $_POST['right_subnet']; ?>" disabled>
  <br>
  <h3>LIFETIME</h3>
  <input type="text" name="lifetime" value="<?php echo $_POST['lifetime']; ?>" disabled>
  <br>
  <h3>PSK</h3>
  <input type="password" name="preshared" value="<?php echo $_POST['preshared']; ?>" disabled>
<?php } ?>
 <br><br>
 <?php
		$myfile = fopen("conf.txt", "w") or die("Unable to open file!");
		$a = 'config setup
    	charondebug="all"
    	uniqueids=yes
    	strictcrlpolicy=no
conn %default
conn tunnel
    	right='.$_POST['right_ip'].'
    	rightsubnet='.$_POST['right_subnet'].'
    	left='.$_POST['left_ip'].'
    	leftsubnet='.$_POST['left_subnet'].'
    	ike=aes256-sha2_256-modp1024!
    	esp=aes256-sha2_256!
    	keyingtries=0
    	ikelifetime='.$_POST['lifetime'].'h
    	lifetime='.$_POST['lifetime'].'h
    	dpddelay=30
    	dpdtimeout=120
    	dpdaction=restart
    	authby=secret
    	auto=start
    	keyexchange=ikev2
    	type=tunnel';
        fwrite($myfile, $a);
        fclose($myfile);
  ?>
  <?php
$myfile = fopen("secrets.txt", "w") or die("Unable to open file!");
$txt = $_POST['left_ip'].' '.$_POST['right_ip'].' : PSK "'.$_POST['preshared'].'"';
fwrite($myfile, $txt);
fclose($myfile);
?>
 <button onclick="history.go(-1);">Back to Edit </button>
</body>
</html>