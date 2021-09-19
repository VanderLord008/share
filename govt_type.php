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
<form method="POST" action="functions.php">
                
                <button type="submit" class="loginbtn" name="democracy">democracy</button>
                <button type="submit" class="loginbtn" name="dictator">dictator</button>


            </form>
<?php

echo $user_data['password'];
$user_forces['army']+=50;
$query=mysqli_query($con,"UPDATE `forces` SET `army`='".$user_forces['army']."',`navy`='10',`airforce`='10' WHERE `username`='$_SESSION[username]'");



} else {
?>
<?php 
echo "log in first to see this page";
}
?>