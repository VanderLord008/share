<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("connection.php");
include("header.php");
include("data.php");

?>
<section class="home-section">

<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    include("data.php");
?>

this is a test page

<?php

echo $user_forces['soldiersLevelOne'];
$con = new mysqli("localhost", "root", "", "test");
$newsoldiers=$user_forces['soldiersLevelOne']+10;
$q1="UPDATE `forces` SET `soldiersLevelOne`='$newsoldiers' where `username`='$_SESSION[username]'";
mysqli_query($con,$q1);
mysqli_query($con, "UPDATE `forces` SET `carriersLevelOne`='0' WHERE `username`='$user_data[username]'");
?>

<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>




</section>