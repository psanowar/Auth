<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<form accept="/Login" method="post">
		@csrf
		Email: <input type="email" name="email"> <br><br>
		Password: <input type="password" name="password"> <br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>