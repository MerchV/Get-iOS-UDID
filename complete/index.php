<html>
	<head>
			<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<p>To complete your registration, enter a name and e-mail address in order to associate a device identifier with a user.</p>
		<form action="submit.php" method="POST" name="myForm">
		  <label for="POST-udid">UDID:</label><br/><input id="POST-udid" type="text" name="udid" value="<?php echo $_GET['UDID'] ?>" size="40"><br/><br/>
		  <label for="POST-name">Name:</label><br/><input id="POST-name" type="text" name="name" value="" size="40"><br/><br/>
		  <label for="POST-email">E-mail:</label><br/><input id="POST-email" type="text" name="email" value="" size="40"><br/><br/>
		  <input type="hidden" name="product" value="<?php echo $_GET['DEVICE_PRODUCT'] ?>" />
		  <input type="submit" value="Complete your registration">
		</form>
	</body>
</html>