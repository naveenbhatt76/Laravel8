<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
</head>
<body>
	<h2>Sign Up Form</h2>
	<form action="savedata" method="post">
		@csrf
		<input type="text" name="name" placeholder="Enter Name"><br><br>
		<input type="text" name="email" placeholder="Enter Email"><br><br>
		<input type="password" name="passwd" placeholder="Enter Passwd"><br><br>
		<button type="submit">Sign Up</button>

	</form>

</body>
</html>