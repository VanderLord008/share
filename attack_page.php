<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>war page</title>
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
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            include("data.php");
        ?>

            this is the attack page

            <br>


            <?php
            if (!isset($_GET['conflictid'])) {
                echo "incorrect way to see this";
            } else {
                $cid = $_GET['conflictid'];
                $conflict = mysqli_query($con, "SELECT * from `conflicts` WHERE `conflictid`='$cid'");

                if (mysqli_num_rows($conflict) == 0) {
                    echo "this conflict is non-existant";
                } 
                else {

                    $conflict_check = mysqli_fetch_assoc($conflict);
                    if ($conflict_check['attacker'] = $_SESSION['username']) {
                        $user = $conflict_check['attacker'];
                        $enemy = $conflict_check['defender'];
                    } elseif ($conflict_check['defender'] = $_SESSION['username']) {
                        $user = $conflict_check['defender'];
                        $enemy = $conflict_check['attacker'];
                    }
                    $user_check = mysqli_query($con, "SELECT * from `registered_user` WHERE `username`='$user'");
                    $s_user = mysqli_fetch_assoc($user_check);
                    $stats_stats = mysqli_query($con, "SELECT * FROM `registered_user` WHERE `username`='$enemy'");
                    $s_user = mysqli_fetch_assoc($stats_stats);
                    echo $s_user['username']; ?> vs <?php echo $s_user['username'];
                                            ?>
                    <br>
                    <?php
                    $stats_rank = mysqli_query($con, "SELECT * FROM `stats` WHERE `username`='$enemy'");
                    $s_rank = mysqli_fetch_assoc($stats_rank);

                    ?>

                    <br>




                    <form method="POST">

                        <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                        <button type="submit" class="attack_land_forces_btn" name="attack_land_forces">Attack land forces</button>
                    </form>
                    <form method="POST">

                        <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                        <button type="submit" class="attack_air_forces_btn" name="attack_air_forces">Attack air forces</button>
                    </form>
                    <form method="POST">

                        <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                        <button type="submit" class="attack_navy_forces_btn" name="attack_navy_forces">Attack navy</button>
                    </form>

                    <br>


                    </form>



                    <?php
                    if (isset($_POST['attack_navy_forces'])) {
                    ?>
                        you have chosen to attack  <?php echo $enemy?>'s navy
                        <br>
                        <br>

                        <?php
                        $external_forces = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$enemy'");
                        $enemy_forces = mysqli_fetch_assoc($external_forces);
                        $internal_forces = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$user'");
                        $user_forces = mysqli_fetch_assoc($internal_forces);
                        echo $enemy ?> has <?php echo $enemy_forces['shipsLevelOne'] ?> normal ships. you have <?php echo $user_forces['shipsLevelOne'] ?> normal ships.
                        <br>
                        <?php echo $enemy ?> has <?php echo $enemy_forces['shipsLevelTwo'] ?> improved ships. you have <?php echo $user_forces['shipsLevelTwo'] ?> improved ships.
                        <br>
                        do you want to attack <?php echo $enemy ?>'s ships?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_navy_ships_btn" name="attack_navy_ships">Attack ships</button>
                        </form>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['destroyersLevelOne'] ?> normal destroyers. you have <?php echo $user_forces['destroyersLevelOne'] ?> normal destroyers.
                        <?php echo $enemy ?> has <?php echo $enemy_forces['destroyersLevelTwo'] ?> improved destroyers. you have <?php echo $user_forces['destroyersLevelTwo'] ?> improved destroyers.

                        <br>
                        do you want to attack <?php echo $enemy ?>'s destroyers?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_navy_destroyers_btn" name="attack_navy_destroyers">Attack destroyers</button>
                        </form>
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['submarinesLevelOne'] ?> normal submarines. you have <?php echo $user_forces['submarinesLevelOne'] ?> normal submarines.
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['submarinesLevelTwo'] ?> improved submarines. you have <?php echo $user_forces['submarinesLevelTwo'] ?> improved submarines.
                        <br>
                        do you want to attack <?php echo $enemy ?>'s submarines?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_navy_submarines_btn" name="attack_navy_submarines">Attack submarines</button>
                        </form>

                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['carriersLevelOne'] ?> carriers. you have <?php echo $user_forces['carriersLevelOne'] ?> carriers.
                        <br>
                        do you want to attack <?php echo $enemy ?>'s carriers?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_navy_carriers_btn" name="attack_navy_carriers">Attack carriers</button>
                        </form>

                    <?php
                    }


                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    else if (isset($_POST['attack_land_forces'])) {
                    ?>
                        you have chose to attack ground forces
                        <br>
                        <br>

                        <?php
                        $external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$enemy'");
                        $enemy_forces = mysqli_fetch_assoc($external_stats);
                        echo $enemy ?> has <?php echo $enemy_forces['soldiersLevelOne'] ?> soldiers. you have <?php echo $user_forces['soldiersLevelOne'] ?> soldiers.
                        <br>
                    <?php echo $enemy ?> has <?php echo $enemy_forces['soldiersLevelTwo'] ?> trained soldiers. you have <?php echo $user_forces['soldiersLevelTwo'] ?> trained soldiers.
                        <br>
                        do you want to attack <?php echo $enemy ?>'s soldiers?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_army_soldiers_btn" name="attack_army_soldiers">Attack soldiers</button>
                        </form>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['artilleryLevelOne'] ?> normal artillery. you have <?php echo $user_forces['artilleryLevelOne'] ?> normal artillery.
 <?php
                        echo $enemy ?> has <?php echo $enemy_forces['artilleryLevelTwo'] ?> improved artillery. you have <?php echo $user_forces['artilleryLevelTwo'] ?> improved artillery.

                        <br>
                        do you want to attack <?php echo $enemy ?>'s artillery?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_army_artillery_btn" name="attack_army_artillery">Attack artillery</button>
                        </form>
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['vehiclesLevelOne'] ?> normal vehicles. you have <?php echo $user_forces['vehiclesLevelOne'] ?> normal vehicles.
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['vehiclesLevelTwo'] ?> improved vehicles. you have <?php echo $user_forces['vehiclesLevelTwo'] ?> improved vehicles.
                        <br>
                        do you want to attack <?php echo $enemy ?>'s vehicles?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_army_vehicles_btn" name="attack_army_vehicles">Attack vehicles</button>
                        </form>

                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['weaponsLevelOne'] ?> normal weapons. you have <?php echo $user_forces['weaponsLevelOne'] ?> normal weapons.
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['weaponsLevelTwo'] ?> improved weapons. you have <?php echo $user_forces['weaponsLevelTwo'] ?> improved weapons.
                        <br>
                        do you want to attack <?php echo $enemy ?>'s weapons?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_army_weapons_btn" name="attack_army_weapons">Attack weapons</button>
                        </form>
                    <?php
                    }
                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    else if (isset($_POST['attack_air_forces'])) {
                    ?>
                        you have chose to attack air
                        <br>
                        <br>

                        <?php
                        $external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$enemy'");
                        $enemy_forces = mysqli_fetch_assoc($external_stats);
                        echo $enemy ?> has <?php echo $enemy_forces['planesLevelOne'] ?> normal planes. you have <?php echo $user_forces['planesLevelOne'] ?> normal planes.
                        <br>
                        <?php echo $enemy ?> has <?php echo $enemy_forces['planesLevelTwo'] ?> improved planes. you have <?php echo $user_forces['planesLevelTwo'] ?> improved planes.
                        <br>
                        do you want to attack <?php echo $enemy ?>'s planes?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_air_planes_btn" name="attack_air_planes">Attack planes</button>
                        </form>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['helicoptersLevelOne'] ?> normal helicopters. you have <?php echo $user_forces['helicoptersLevelOne'] ?> normal helicopters.
    <?php
                        echo $enemy ?> has <?php echo $enemy_forces['helicoptersLevelTwo'] ?> improved helicopters. you have <?php echo $user_forces['helicoptersLevelTwo'] ?> improved helicopters.

                        <br>
                        do you want to attack <?php echo $enemy ?>'s helicopters?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_air_helicopters_btn" name="attack_air_helicopters">Attack helicopters</button>
                        </form>
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['bombersLevelOne'] ?> bombers. you have <?php echo $user_forces['bombersLevelOne'] ?> bombers.
                        <br>
                        do you want to attack <?php echo $enemy ?>'s bombers?
                        <form method="POST" action="functions.php">

                            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                            <button type="submit" class="attack_air_bombers_btn" name="attack_air_bombers">Attack bombers</button>
                        </form>

                        <br>
                        <br>

            <?php
                    }
                }
            }
        } else {
            ?>
        <?php
            echo "log in first to see this page";
        }
        ?>


    </section>