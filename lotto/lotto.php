<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>A Form</title>
</head>
<body>
	<form method="post" action="bingo.php">
		Your number1: <input type="text" name="txtUserName1" /><br>
		Your number2: <input type="text" name="txtUserName2" /><br>
		Your number3: <input type="text" name="txtUserName3" /><br>
		Your number4: <input type="text" name="txtUserName4" /><br>
		Your number5: <input type="text" name="txtUserName5" /><br>
		Your number6: <input type="text" name="txtUserName6" /><br>
		Your number7: <input type="text" name="txtUserName7" /><br>
		<input type="submit" name="btnOK" value="OK" />
		
	</form>
	

	   <?php echo $_POST["txtUserName"] ?>
</body>
</html>