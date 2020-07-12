<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="loginstyle.css" rel="stylesheet" type="text/css">
    </head>
	<body>
		<div class="login">
			<h1>Sign up</h1>
			<form action="createuser.php" method="post">
				<label for="email">
                <i class="fas fa-at"></i>
                </label>
				<input type="email" name="email" placeholder="School email" id="email" required>
				<label for="password">
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
                <label for="vpassword">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="vpassword" placeholder="Repeat password" id="vpassword" required>
				<input type="submit" name="signupsubmit" value="Sign Up">
			</form>
		</div>
	</body>
</html>