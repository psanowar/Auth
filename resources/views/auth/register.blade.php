<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
	<form accept="/register" method="post">
		@csrf
		Name: <input type="text" name="name"> <br><br>
		Email: <input type="email" name="email"> <br><br>
		Password: <input type="password" name="password"> <br><br>
		<input type="submit" value="Signup">
	</form>
</body>
</html>