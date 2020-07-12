<!DOCTYPE html>
<? session_start();
?>
<head>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="grid-container">
        <div class="grid"> <?php include "php/header.php"; ?> </div>
        <div class="grid">
        <?php //If session is on show homepage, else show general welcome page
        if(isset($_SESSION['id'])) {
            include "php/homepage.php";
        } else {
            include "php/welcome.php";
        }
        ?>
         </div>
        <div class="grid"> <?php include "php/footer.php"; ?> </div>
    </div>

</body>