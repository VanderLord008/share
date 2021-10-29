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
        your current fighting planes are <?php echo $user_forces['planes'] ?>
        <br>
        your current money is <?php echo $user_stats['money'] ?>
        <br>

        <form method="POST" action="functions.php">
            <input type="number" min="-10000000000000" max="100000000000" placeholder="enter the fighter planes" name="planes">

            <button type="submit" class="createplanesbtm" name="createplanes">create fighter planes</button>
        </form>

        <br>
        <br>
        <p>cost of creating one attack helicopter is 1000</p>
        <br>
        your current attack helicopters are <?php echo $user_forces['helicopters'] ?>
        <br>
        your current money is <?php echo $user_stats['money'] ?>
        <br>

        <form method="POST" action="functions.php">
            <input type="number" min="-10000000000000" max="100000000000" placeholder="enter the attack helicopters" name="helicopters">

            <button type="submit" class="createhelicoptersbtm" name="createhelicopters">create attack helicopters</button>
        </form>

        <br>
        <br>
        <p>cost of creating one bomber is 1000</p>
        <br>
        your current bombers are <?php echo $user_forces['bombers'] ?>
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

    </section>