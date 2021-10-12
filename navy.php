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
this is the navy page
<br>
<br>
battle ships

destroyers

submarines

aircraft carriers
<br>
<br>
<br>
<p>cost of creating one battle ship is 1000</p>
<br>
your current battle ships are <?php echo $user_forces['ships'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the battle ships" name="ships" >

                <button type="submit" class="createshipsbtm" name="createships">create battle ships</button>
</form>

<br>
<br>
<p>cost of creating one destroyer is 1000</p>
<br>
your current destroyers are <?php echo $user_forces['destroyers'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the destroyers" name="destroyers" >

                <button type="submit" class="createdestroyersbtm" name="createdestroyers">create destroyers</button>
</form>

<br>
<br>
<p>cost of creating one submarine is 1000</p>
<br>
your current submarines are <?php echo $user_forces['submarines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the submarines" name="submarines" >

                <button type="submit" class="createsubmarinesbtm" name="createsubmarines">create submarines</button>
</form>

<br>
<br>
<p>cost of creating one aircraft carrier is 1000</p>
<br>
your current aircraft carriers are <?php echo $user_forces['carriers'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the aircraft carriers" name="carriers" >

                <button type="submit" class="createcarriersbtm" name="createcarriers">create aircraft carriers</button>
</form>

</section>