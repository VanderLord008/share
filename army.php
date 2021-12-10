<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>army</title>
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
    <a href="internal_forces.php">internal forces</a>
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
you can hire a total of <?php echo ($user_forces['numberOfWars']+1)*$user_stats['happiness']*$user_stats['popularity']*$user_stats['fear']*10;?> soldiers
<br>

<?php
$soldiers_limit = ($user_forces['numberOfWars']+1)*$user_stats['happiness']*$user_stats['popularity']*$user_stats['fear']*10;

if(($soldiers_limit-$user_forces['soldiers'])>0)
{
    ?>
    you can hire <?php echo $soldiers_limit-$user_forces['soldiers'];?> more soldiers
    <?php

}
else if(($soldiers_limit-$user_forces['soldiers'])<0)
{

?>
you have to fire <?php echo $user_forces['soldiers']-$soldiers_limit;?> soldiers now
<?php
}
?>
<br>
<br>
<?php if($user_forces['forcedMilitaryHiring']==0)
{
    ?>
you can force people to enlist in the army but it will decrease happiness and popularity
<br>
<form method="POST" action="functions.php">
<button type="submit" class="createsoldiersbtm" name="forcedMilitaryHiring">force the peasants</button>
</form>
<?php
}
else if($user_forces['forcedMilitaryHiring']==1)
{
    ?>
    you cannot force anymore people for now
    <?php
}
?>
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


<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>



</section>
</body>