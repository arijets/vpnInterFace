<html>
<body>
First name:<br>
<?php if(isset ($_POST['Submit']))
{ ?>
  <input type="text" name="firstname" value="<?php echo $_POST['firstname']; ?>">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="<?php echo $_POST['lastname']; ?>">
  <br><br>
 <?php } ?>
</body>
</html>
