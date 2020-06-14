<!DOCTYPE html>
<html>
<head>
	<title>Login Success</title>
</head>
<body>
	<!-- jika login berhasil akan masuk ke halaman ini -->
	<!-- set session untuk mendapatkan value yang sudah di-set di controller -->
	<h1>Login success! Welcome, <?php session_start(); echo $_SESSION['name']; ?></h1>
</body>
</html>