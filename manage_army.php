<?php
include("connection.php");
include("header.php");
include("data.php");

?>
<link rel="stylesheet" href="style.css">


<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
?>

this page is for managing your army choose one of the choices
<form method="POST" action="functions.php">
             
                <input type="text" placeholder="increase_army" name="increase_army">
                <input type="text" placeholder="decrease_army" name="decrease_army">


                <button type="submit" class="resetbtn" name="finallize">finallize</button>
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