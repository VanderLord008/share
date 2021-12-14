<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>airforce</title>
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

this is the airforce page

Fighter Planes

Attack helicopters

Bombers

missiles
<br>
<br>
<br>
<p>cost of creating one fighter plane is 1000</p>
<br>
your current fighting planes are <?php echo $user_forces['planesLevelOne'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
    <input type="number" min="-10000000000000" max="100000000000" placeholder="enter the fighter planes" name="planes">

    <button type="submit" class="createplanesbtm" name="createplanes">create fighter planes</button>
</form>

<br>
<br>



<?php
if($user_stats['researchPlanesLevelTwo']=='1')
{
    echo "you can improve your planes now";
    ?>
    <br>you have <?php echo $user_forces['planesLevelTwo'] ?> special battle planes <br>
    <form method="POST" action="functions.php">
        <input type="number" min="-100000000000" max="100000000000" placeholder="enter the number of planes" name="improveplanesnumber">

        <button type="submit" class="improveplanesbtm" name="improveplanes">improve these planes</button>
    </form>
    <br>
    <?php
}

elseif($user_stats['researchPlanesLevelTwo']=='0')
{
echo "you can research further to improve your planes";
?>

<br>
            <form method="POST" action="functions.php">
                <button type="submit" class="researchplanesLevelTwobtm" name="researchPlanesLevelTwo">research planes further</button>
            </form>
            <br>

<?php
}    
?>




















<p>cost of creating one attack helicopter is 1000</p>
<br>
your current attack helicopters are <?php echo $user_forces['helicoptersLevelOne'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
    <input type="number" min="-10000000000000" max="100000000000" placeholder="enter the attack helicopters" name="helicopters">

    <button type="submit" class="createhelicoptersbtm" name="createhelicopters">create attack helicopters</button>
</form>

<br>
<br>




<?php
if($user_stats['researchHelicoptersLevelTwo']=='1')
{
    echo "you can improve your helicopters now";
    ?>
    <br>you have <?php echo $user_forces['helicoptersLevelTwo'] ?> special battle helicopters <br>
    <form method="POST" action="functions.php">
        <input type="number" min="-100000000000" max="100000000000" placeholder="enter the number of helicopters" name="improvehelicoptersnumber">

        <button type="submit" class="improvehelicoptersbtm" name="improvehelicopters">improve these helicopters</button>
    </form>
    <br>
    <?php
}

elseif($user_stats['researchHelicoptersLevelTwo']=='0')
{
echo "you can research further to improve your helicopters";
?>

<br>
            <form method="POST" action="functions.php">
                <button type="submit" class="researchhelicoptersLevelTwobtm" name="researchHelicoptersLevelTwo">research helicopters further</button>
            </form>
            <br>

<?php
}    
?>

























<p>cost of creating one bomber is 1000</p>
<br>
your current bombers are <?php echo $user_forces['bombersLevelOne'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
    <input type="number" min="-10000000000000" max="100000000000" placeholder="enter the bombers" name="bombers">

    <button type="submit" class="createbombersbtm" name="createbombers">create bombers</button>
</form>

<br>
<br>
<p>cost of creating one missile is 1000</p>
<br>
your current missiles are <?php echo $user_forces['missiles'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>

<form method="POST" action="functions.php">
    <input type="number" min="-10000000000000" max="100000000000" placeholder="enter the missiles" name="missiles">

    <button type="submit" class="createmissilesbtm" name="createmissiles">create missiles</button>
</form>






<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>
    </section>