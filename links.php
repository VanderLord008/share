<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>links</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("connection.php");
include("header.php");


?>
<section class="home-section">

<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    include("data.php");
?>

<a href="airforce.php">airforce.php</a><br>
<a href="army.php">army.php</a><br>
<a href="conflicts.php">conflicts.php</a><br>
<a href="budget.php">budget.php</a><br>
<a href="continents.php">continents.php</a><br>
<a href="economy_type.php">economy_type.php</a><br>
<a href="govt_type.php">govt_type</a><br>
<a href="internal_forces.php">internal_forces</a><br>
<a href="market.php">market.php</a><br>
<a href="navy.php">navy.php</a><br>
<a href="playerstats.php">playerstats.php</a><br>
<a href="policies.php">policies.php</a><br>
<a href="ranking.php">ranking.php</a><br>
<a href="state_creater.php">state_creater.php</a><br>
<a href="stateslist.php">stateslist.php</a><br>
<a href="statepage.php">statepage.php</a><br>
<a href="taxes.php">taxes.php</a><br>
<a href="trade.php">trade.php</a><br>
<a href="sports.php">sports.php</a><br>
<a href="raws.php">raws.php</a><br>
<a href="industry.php">industry.php</a><br>


<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>

</section>