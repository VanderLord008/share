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


username = <?php echo $user_data['username'] ?>
<br>
email = <?php echo $user_data['email'] ?>
<br>
verified = <?php echo $user_data['verified'] ?>
<br>


soldiers = <?php echo $user_forces['soldiersLevelOne'] ?>
<br>
artillery = <?php echo $user_forces['artilleryLevelOne'] ?>
<br>
armoured vehicles = <?php echo $user_forces['vehiclesLevelOne'] ?>
<br>


healthcare = <?php echo $user_budget['healthcare'] ?>
<br>
welfare = <?php echo $user_budget['welfare'] ?>
<br>
military = <?php echo $user_budget['military'] ?>
<br>
research = <?php echo $user_budget['research'] ?>
<br>



state1 = <?php echo $user_states['state1'] ?>
<br>

population = <?php echo $user_stats['population'] ?>
<br>
government = <?php echo $user_stats['government'] ?>
<br>
economic_policy = <?php echo $user_stats['economic_policy'] ?>
<br>
corruption = <?php echo $user_stats['corruption'] ?>
<br>
happiness = <?php echo $user_stats['happiness'] ?>
<br>
popularity = <?php echo $user_stats['popularity'] ?>
<br>
money = <?php echo $user_stats['money'] ?>
<br>


<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>


</section>
