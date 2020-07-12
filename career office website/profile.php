<!DOCTYPE html>
<?php session_start();
ob_start();
?>
<head>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var $checkboxes = $('input[name="country[]"]');
            console.dir($checkboxes);
            $checkboxes.change(function(){
                
                console.log(this.checked);});//log when state changes
        });
    </script>

</head>

<?php
$conn = mysqli_connect("localhost", "root", "", "phplogin");
$email = $_SESSION['name'];
$query = "SELECT * FROM accounts WHERE username='$email'";
$result = mysqli_query($conn, $query);
echo "ads";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "adsad";
    if ($row["eu"] == 0) {echo "ëu";}
}
?>

<body>
    <div class="grid-profilecontainer">
        <div class="grid"> <?php include "php/header.php"; ?> </div>
        <div class="grid main-container">
            <div class="grid padding">
                <?php 
                //Add profile picture
                $email  = $_SESSION['name'];
                $user = ucfirst(strstr($email, '.', true));
                echo 'Name: ' . $user;
                echo "<br>";
                echo 'Email: ' . $email;
                ?>
            </div>
           
            <form class="grid padding form-container" action="/profile.php" method="post" name="profileForm" id="profileForm">
                    <fieldset>
                    Countries:<br>
                    <input type="checkbox" name="country[]"  value="Europe">Europe<br>
                    <input type="checkbox" name="country[]" checked value="Australia">Australia<br>
                    <input type="checkbox" name="country[]" checked value="China">China<br>
                    <input type="checkbox" name="country[]" checked value="Canada">Canada<br>
                    <input type="checkbox" name="country[]" checked value="United Kingdome">United Kingdome<br>
                    <input type="checkbox" name="country[]" checked value="United States">United States<br>
                    </fieldset>
        
                
                    <fieldset>
                    Subjects:<br>
                    Group 1: 
                        <select name="group1" id="group1">
                            <option value="langlit">Lang&Lit</option>
                            <option value="lit">Literature</option>
                            <option value="litandper">Lit&Per</option>
                        </select><br>

                    Group 2: 
                    <select name="group2">
                        <option value="spanish">Spanish</option>
                        <option value="french">French</option>
                        <option value="german">German</option>
                    </select><br>

                    Group 3: 
                    <select name="group3">
                        <option value="history">History</option>
                        <option value="busman">Bus&Man</option>
                        <option value="economics">Economics</option>
                        <option value="pshycology">Pshycology</option>
                    </select><br>

                    Group 4: 
                    <select name="group4">
                        <option value="physics">Physics</option>
                        <option value="chemistry">Chemistry</option>
                        <option value="biology">Biology</option>
                        <option value="computerscience">Computer Science</option>
                    </select><br>

                    Group 5: 
                    <select name="group5">
                        <option value="math">Math SL</option>
                        <option value="mathhl">Math HL</option>
                        <option value="mathst">Math St</option>
                    </select><br>

                    Group 6: 
                    <select name="group6" id="group6">
                    <option value="art">Art</option>
                    <option value="dt">DT</option>
                    <option value="history">History</option>
                    <option value="busman">Bus&Man</option>
                    <option value="economics">Economics</option>
                    <option value="pshycology">Pshycology</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="biology">Biology</option>
                    <option value="computerscience">Computer Science</option>
                    </select><br>
                    </fieldset>
                    <button type="submit" form="profileForm" value="Submit">Save</button>
                </form>
                <div></div>
                
         <?php
         $region = $_POST['country'];
         if(empty($region)){
           echo("Please select the regions you are interested in and submit your preference.");} 
         else{
           $N = count($region);
           echo("You selected $N region(s): ");
           for($i=0; $i < $N; $i++){
             echo($region[$i] . " ");}
            }?>
        
        </div>
        <div class="grid"> <?php include "php/footer.php"; ?> </div>

    </div>

</body>
