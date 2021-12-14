<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navy</title>
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
your current normal battle ships are <?php echo $user_forces['shipsLevelOne'] ?>
<br>


<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the battle ships" name="ships" >

                <button type="submit" class="createshipsbtm" name="createships">create battle ships</button>
</form>
<br>





<?php
if($user_stats['researchShipsLevelTwo']=='1')
{
    echo "you can improve your ships now";
    ?>
    <br>you have <?php echo $user_forces['shipsLevelTwo'] ?> special battle ships <br>
    <form method="POST" action="functions.php">
        <input type="number" min="-100000000000" max="100000000000" placeholder="enter the number of ships" name="improveshipsnumber">

        <button type="submit" class="improveshipsbtm" name="improveships">improve these ships</button>
    </form>
    <br>
    <?php
}

elseif($user_stats['researchShipsLevelTwo']=='0')
{
echo "you can research further to improve your ships";
?>

<br>
            <form method="POST" action="functions.php">
                <button type="submit" class="researchshipsLevelTwobtm" name="researchShipsLevelTwo">research ships further</button>
            </form>
            <br>

<?php
}    
?>






<br>
<br>
<p>cost of creating one destroyer is 1000</p>
<br>
your current destroyers are <?php echo $user_forces['destroyersLevelOne'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the destroyers" name="destroyers" >

                <button type="submit" class="createdestroyersbtm" name="createdestroyers">create destroyers</button>
</form>

<br>
<br>
<?php
if($user_stats['researchDestroyersLevelTwo']=='1')
{
    echo "you can improve your destroyers now";
    ?>
    <br>you have <?php echo $user_forces['destroyersLevelTwo'] ?> improved destroyers<br>
    <form method="POST" action="functions.php">
        <input type="number" min="-100000000000" max="100000000000" placeholder="enter the number of destroyers" name="improvedestroyersnumber">

        <button type="submit" class="improvedestroyersbtm" name="improvedestroyers">improve these destroyers</button>
    </form>
    <br>
    <?php
}

elseif($user_stats['researchDestroyersLevelTwo']=='0')
{
echo "you can research further to improve your destroyers";
?>

<br>
            <form method="POST" action="functions.php">
                <button type="submit" class="researchdestroyersLevelTwobtm" name="researchDestroyersLevelTwo">research destroyers further</button>
            </form>
            <br>

<?php
}    
?>



















<p>cost of creating one submarine is 1000</p>
<br>
your current submarines are <?php echo $user_forces['submarinesLevelOne'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the submarines" name="submarines" >

                <button type="submit" class="createsubmarinesbtm" name="createsubmarines">create submarines</button>
</form>

<br>
<br>
<?php
if($user_stats['researchSubmarinesLevelTwo']=='1')
{
    echo "you can improve your submarines now";
    ?>
    <br>you have <?php echo $user_forces['submarinesLevelTwo'] ?> special battle submarines <br>
    <form method="POST" action="functions.php">
        <input type="number" min="-100000000000" max="100000000000" placeholder="enter the number of submarines" name="improvesubmarinesnumber">

        <button type="submit" class="improvesubmarinesbtm" name="improvesubmarines">improve these submarines</button>
    </form>
    <br>
    <?php
}

elseif($user_stats['researchSubmarinesLevelTwo']=='0')
{
echo "you can research further to improve your submarines";
?>

<br>
            <form method="POST" action="functions.php">
                <button type="submit" class="researchsubmarinesLevelTwobtm" name="researchSubmarinesLevelTwo">research submarines further</button>
            </form>
            <br>

<?php
}    
?>



















<p>cost of creating one aircraft carrier is 1000</p>
<br>
your current aircraft carriers are <?php echo $user_forces['carriersLevelOne'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the aircraft carriers" name="carriers" >

                <button type="submit" class="createcarriersbtm" name="createcarriers">create aircraft carriers</button>
</form>


<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>

</section>