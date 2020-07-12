<?php


ob_start();
session_start();
// DBs Constants
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['password'], $_POST['vpassword'] ) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}





if (isset($_POST['signupsubmit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $vpassword = $_POST['vpassword'];
    $len = (strlen($password));
    $query = mysqli_query($con,"SELECT username FROM accounts WHERE username='".$username."'");
    if (mysqli_num_rows($query) == 0){
        if ($len > 8){
            if ($password === $vpassword){
                    //protect agains SQL injection
                    if ($stmt = $con->prepare("INSERT INTO `accounts` (`id`, `username`, `password`, `power`) VALUES (NULL, '$username', '$password', '1')")) {
                        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
                        $stmt->bind_param('s', $_POST['username']);
                        $stmt->execute();
                        header("Location: login.php?signupsuccess?$username");
                        exit();
                        }
                    }
            else{
                $error = "Passwords do not match";
            }
        }
        else{
            $error = "Short password";
        }
    }
    else{
        $error = "Username already exists";
    }
}
else{
    $error = "Unkown Error";
}

header("Location: signup.php?signupfailed?$error");