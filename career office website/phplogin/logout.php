<?php

session_start();
session_destroy();
header ("Location: ../index.php");
?>
<body>
You have succesfully logged out </br>
<a href="../index.php">Click here to return back to Homepage</a>
</body>