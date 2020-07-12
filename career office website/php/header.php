<?php session_start();
ob_start();
?>

<html>
<header>
<link rel="stylesheet" href="style/navbar.css">
</header>
<div class="header-container topnav">
    <div class="grid topimage"><img class="logo" src="resources/headline.jpg"></div>
</div>
<div class="grid blue topnav">
            <span class="empty">&nbsp</span>
            <span class="empty">&nbsp</span>
            <span class="empty">&nbsp</span>
            <a class="" href="index.php" id="Home">Home</a>
            <?php if(isset($_SESSION['id'])): ?>
            <a class="" href="https://bsh.managebac.com/" id="ManageBac">ManageBac</a>
            <a class="" href="https://app.bridge-u.com/student/" id="ManageBac">Bridge-U</a>
            <a class="" href="/profile.php" id="ManageBac">Preference</a>
            <a class="link" href="http://ia/phplogin/logout.php" style="">Logout</a>
            <?php else: ?>
            <a class="link" href="http://ia/phplogin/login.php" style="">Login</a>
            <?php endif; ?>
                </div>

</html>