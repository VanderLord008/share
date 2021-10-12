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
    click on this links below to go to other pages of the military
    <br>
    <br>
    <br>
    <a href="navy.php">navy</a>
    <br>
    <br>
    <a href="airforce.php">airforce</a>
    <br>
    <br>
    <br>
<p>this is the army page</p>
<p>you are new so not all things are unlocked for you which will unlock as you progress through the story for now you can make soldiers</p>
<br>
<p>cost of creating one soldier is 1000</p>
<br>
your current soldiers are <?php echo $user_forces['soldiers'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<button onclick="window.location.href='taxes.php'">Continue</button>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the soldiers" name="soldiers" >

                <button type="submit" class="createsoldiersbtm" name="createsoldiers">create soldiers</button>
</form>
<br>
<p>cost of creating one artillery is 10000</p>
<br>
your current artilleries are <?php echo $user_forces['artillery'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the artillery" name="artillery" >

                <button type="submit" class="createartillerybtm" name="createartillery">create artillery</button>
</form>
<br>
<p>cost of creating one armoured vehicel is 20000</p>
<br>
your current soldiers are <?php echo $user_forces['vehicles'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the vehicles" name="vehicles" >

                <button type="submit" class="createvehiclesbtm" name="createvehicles">create vehicles</button>
</form>
<br>
<p>cost of creating one gun is 500</p>
<br>
your current weapons are <?php echo $user_forces['weapons'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the weapons" name="weapons" >

                <button type="submit" class="createweaponsbtm" name="createweapons">create weapons</button>
</form>

</section>
</body>