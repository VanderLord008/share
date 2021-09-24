<?php
include("connection.php");
include("header.php");
include("data.php");

?>
<link rel="stylesheet" href="style.css">


<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
?>

<p>Choose your government type</p>
<div class="govtchoice">
<div class="democracychoice">
<form method="POST" action="functions.php">
                <p>this is the democray</p>
                <button type="submit" class="democracybtn" name="democracy">democracy</button>
                


            </form>
            </div>
<div class="dictatorshipchoice">
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="dictatorbtn" name="dictatorship">dictator</button>
              


</form>
</div>
<div class="autocracychoice">
<form method="POST" action="functions.php">
                
              
                <button type="submit" class="autocracybtn" name="autocracy">dictator</button>


</form>
</div>
</div>
<?php

echo $user_data['password'];
// $user_forces['army']+=50;
// $query=mysqli_query($con,"UPDATE `forces` SET `army`='".$user_forces['army']."',`navy`='10',`airforce`='10' WHERE `username`='$_SESSION[username]'");



} else {
?>
<?php 
echo "log in first to see this page";
}
?>