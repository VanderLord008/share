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
<link rel="stylesheet" href="style.css">

<section class="home-section">


<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
?>



<div class="democracychoice">

    <p>as a new player you can only have dictatorship type og govt as you progress through the game you will unlock all others different types</p>
    <button onclick="window.location.href = 'continents.php';">click here to select which continent you want to start in</button>




<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>
</section>