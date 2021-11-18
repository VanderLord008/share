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



this is the internal forces page
<br>
spies
police
propagandist

<br>
<br>
<br>
<p>cost of creating one spy is 1000</p>
<br>
your current spies are <?php echo $user_forces['spies'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the spies" name="spies" >

                <button type="submit" class="createspiesbtm" name="createspies">create spies</button>
</form>

<br>
<br>
<p>cost of creating one policeman is 1000</p>
<br>
your current policemen are <?php echo $user_forces['police'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the policemen" name="police" >

                <button type="submit" class="createpolicebtm" name="createpolice">create policemen</button>
</form>

<br>
<br>
<p>cost of creating one propagandist is 1000</p>
<br>
your current propagandists are <?php echo $user_forces['propagandists'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the propagandists" name="propagandists" >

                <button type="submit" class="createpropagandistsbtm" name="createpropagandists">create propagandists</button>
</form>

<br>
<br>



<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>



</section>