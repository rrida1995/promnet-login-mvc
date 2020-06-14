<!DOCTYPE html>
<html>
<head>
	<title>Login with MVC</title>
</head>
<body>
	<!-- action form ke call_login_process.php -->
	<form action="call_login_process.php" method="post">
		<p><input type="text" name="usernameTxt" placeholder="Username"></p>
		<p><input type="password" name="passwordTxt" placeholder="Password"></p>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>