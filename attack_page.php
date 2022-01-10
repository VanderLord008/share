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
    include "connection.php";
    include "header.php";
    include "data.php";

    ?>
    <section class="home-section">


        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            include "data.php";
        ?>

            this is the attack page

            <br>


            <?php
            if (!isset($_GET['conflictid'])) {
                echo "incorrect way to see this";
            } elseif(isset($_GET['conflictid'])) {
                $cid = $_GET['conflictid'];
                $conflict = mysqli_query($con, "SELECT * from `conflicts` WHERE `conflictid`='$cid'");
                if (mysqli_num_rows($conflict) == 0) {
                    echo "this conflict is non-existant";
                }
                elseif(mysqli_num_rows($conflict) == '1')
                {
                $conflict_check = mysqli_fetch_assoc($conflict);
                if ($conflict_check['attacker'] == $_SESSION['username']) {
                    $user = $conflict_check['attacker'];
                    $enemy = $conflict_check['defender'];
                    
                } elseif ($conflict_check['defender'] == $_SESSION['username']) {
                    $user = $conflict_check['defender'];
                    $enemy = $conflict_check['attacker'];
                    echo "this is a defencive battle";
                }
                $user_check = mysqli_query($con, "SELECT * from `registered_user` WHERE `username`='$user'");
                $s_user = mysqli_fetch_assoc($user_check);
                $stats_stats = mysqli_query($con, "SELECT * FROM `registered_user` WHERE `username`='$enemy'");
                $s_enemy = mysqli_fetch_assoc($stats_stats);
                //fetching this conflicts data
                $conflictStat = mysqli_query($con, "SELECT * FROM `conflicts` WHERE `conflictid`='$cid'");
                $conflictStats = mysqli_fetch_assoc($conflictStat);
               
                //getting the time
                $current=date("Y-m-d H:i:s");
                $currentTime=strtotime($current);
                
                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //attacker section
                if($conflictStats['defender']!=$_SESSION['username']){
                if($conflictStats['attackNumber']=='1') {

                   
                    echo $s_user['username']; ?> vs <?php echo $s_enemy['username'];
                                                    ?>
                    <br>
                    <?php
                    $stats_rank = mysqli_query($con, "SELECT * FROM `stats` WHERE `username`='$enemy'");
                    $s_rank = mysqli_fetch_assoc($stats_rank);

                    ?>

                    <br>













                    <?php
                    $external_forces = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$enemy'");
                    $enemy_forces = mysqli_fetch_assoc($external_forces);
                    $internal_forces = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$user'");
                    $user_forces = mysqli_fetch_assoc($internal_forces);

                    if($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])<=0 && $conflictStats['defenceForcesDeployedForFirstWar']=='no' && $conflictStats['attackForcesDeployedForFirstWar']=='no'){
                        ?>
                    <form method="POST" action="functions.php">

                    <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                    <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" 

                   
                    ?>  <?php echo $enemy?> has <?php echo $enemy_forces['shipsLevelOne'] ?> normal ships. you have <?php echo $user_forces['shipsLevelOne'] ?> normal ships.
                    <br>
                    <br>
                    <?php echo $enemy ?> has <?php echo $enemy_forces['shipsLevelTwo'] ?> improved ships. you have <?php echo $user_forces['shipsLevelTwo'] ?> improved ships.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s ships?
                    <br>
                    <br>
                   
                        how many normal ships do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['shipsLevelOne']; ?>" value="0" placeholder="normal ships to send to fight" name="fightingnormalships">
                        <br>
                        <br>
                        how many improved ships do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['shipsLevelTwo']; ?>" value="0" placeholder="improved ships to send to fight" name="fightingimprovedships">
                        <br>
                        <br>
                        <!-- <button type="submit" class="attack_navy_ships_btn" name="attack_navy_ships">Attack ships</button> -->
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['destroyersLevelOne'] ?> normal destroyers. you have <?php echo $user_forces['destroyersLevelOne'] ?> normal destroyers.
                        <br>
                        <br>
                        <?php echo $enemy ?> has <?php echo $enemy_forces['destroyersLevelTwo'] ?> improved destroyers. you have <?php echo $user_forces['destroyersLevelTwo'] ?> improved destroyers.
                        <br>
                        <br>
                        do you want to attack <?php echo $enemy ?>'s destroyers?
                        <br>
                        <br>
                        how many normal destroyers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['destroyersLevelOne']; ?>" value="0" placeholder="normal destroyers to send to fight" name="fightingnormaldestroyers">
                        <br>
                        <br>
                        how many improved destroyers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['destroyersLevelTwo']; ?>" value="0" placeholder="improved destroyers to send to fight" name="fightingimproveddestroyers">
                        <br>
                        <br>

                        <!--
                            <button type="submit" class="attack_navy_destroyers_btn" name="attack_navy_destroyers">Attack destroyers</button> -->
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['submarinesLevelOne'] ?> normal submarines. you have <?php echo $user_forces['submarinesLevelOne'] ?> normal submarines.
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['submarinesLevelTwo'] ?> improved submarines. you have <?php echo $user_forces['submarinesLevelTwo'] ?> improved submarines.
                        <br>
                        <br>
                        do you want to attack <?php echo $enemy ?>'s submarines?
                        <!--
                            <button type="submit" class="attack_navy_submarines_btn" name="attack_navy_submarines">Attack submarines</button>
                         -->
                        how many normal submarines do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['submarinesLevelOne']; ?>" value="0" placeholder="normal submarines to send to fight" name="fightingnormalsubmarines">
                        <br>
                        <br>
                        how many improved submarines do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['submarinesLevelTwo']; ?>" value="0" placeholder="improved submarines to send to fight" name="fightingimprovedsubmarines">
                        <br>
                        <br>

                        <br>
                        <br>

                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['carriersLevelOne'] ?> carriers. you have <?php echo $user_forces['carriersLevelOne'] ?> carriers.
                        <br>
                        <br>
                        do you want to attack <?php echo $enemy ?>'s carriers?
                        <br>
                        <br>
                        how many carriers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['carriersLevelOne']; ?>0" value="0" placeholder="normal carriers to send to fight" name="fightingnormalcarriers">
                        <br>
                        <br>

                        <!-- <button type="submit" class="attack_navy_carriers_btn" name="attack_navy_carriers">Attack carriers</button> -->


                    <?php
                

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ?>
                    <br>
                    <br>
                    <?php
                    $external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$enemy'");
                    $enemy_forces = mysqli_fetch_assoc($external_stats);
                    echo $enemy ?> has <?php echo $enemy_forces['soldiersLevelOne'] ?> soldiers. you have <?php echo $user_forces['soldiersLevelOne'] ?> soldiers.
                    <br>
                    <br>
                    <?php echo $enemy ?> has <?php echo $enemy_forces['soldiersLevelTwo'] ?> trained soldiers. you have <?php echo $user_forces['soldiersLevelTwo'] ?> trained soldiers.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s soldiers?
                    <br>
                    <br>
                    <!-- what type of enemy force do you want the soldiers to attack in the enemy nation?
                        <br> -->



                    how many untrained soldiers do you want to send to attack the enemy's forces?<br>
                    <br>

                    <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                    <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
                    <input type="number" min="0" max="<?php echo $user_forces['soldiersLevelOne']; ?>" value="0" placeholder="untrained soldiers to send to fight" name="fightinguntrainedsoldiers">
                    <br>
                    <br>
                    how many trained soldiers do you want to send to attack the enemy's forces?<br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['soldiersLevelTwo']; ?>" value="0" placeholder="trained soldiers to send to fight" name="fightingtrainedsoldiers">
                    <br>
                    <br>

                    <br>
                    <!-- <button type="submit" class="attack_army_soldiers_btn" name="attack_army_soldiers">Attack soldiers</button> -->

                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['artilleryLevelOne'] ?> normal artillery. you have <?php echo $user_forces['artilleryLevelOne'] ?> normal artillery. <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['artilleryLevelTwo'] ?> improved artillery. you have <?php echo $user_forces['artilleryLevelTwo'] ?> improved artillery.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s artillery?
                    <br>
                    <br>
                    how many normal artilleries do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['artilleryLevelOne']; ?>" value="0" placeholder="normal artilleries to send to fight" name="fightingnormalartilleries">

                    <br>
                    <br>
                    how many improved artilleries do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['artilleryLevelTwo']; ?>" value="0" placeholder="improved artilleries to send to fight" name="fightingimprovedartilleries">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_artillery_btn" name="attack_army_artillery">Attack artillery</button>
                         -->
                    <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['vehiclesLevelOne'] ?> normal vehicles. you have <?php echo $user_forces['vehiclesLevelOne'] ?> normal vehicles.
                    <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['vehiclesLevelTwo'] ?> improved vehicles. you have <?php echo $user_forces['vehiclesLevelTwo'] ?> improved vehicles.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s vehicles?
                    <br>
                    <br>
                    how many normal vehicles do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['vehiclesLevelOne']; ?>" value="0" placeholder="normal vehicles to send to fight" name="fightingnormalvehicles">

                    <br>
                    <br>
                    how many improved vehicles do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['vehiclesLevelTwo']; ?>" value="0" placeholder="improved vehicles to send to fight" name="fightingimprovedvehicles">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_vehicles_btn" name="attack_army_vehicles">Attack vehicles</button> -->


                    <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['weaponsLevelOne'] ?> normal weapons. you have <?php echo $user_forces['weaponsLevelOne'] ?> normal weapons.
                    <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['weaponsLevelTwo'] ?> improved weapons. you have <?php echo $user_forces['weaponsLevelTwo'] ?> improved weapons.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s weapons?
                    <br>
                    <br>
                    how many normal weapons do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['weaponsLevelOne']; ?>" value="0" placeholder="normal weapons to send to fight" name="fightingnormalweapons">

                    <br>
                    <br>
                    how many improved weapons do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['weaponsLevelTwo']; ?>" value="0" placeholder="improved weapons to send to fight" name="fightingimprovedweapons">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_weapons_btn" name="attack_army_weapons">Attack weapons</button> -->

                    <br>
                    <br>

                    <br>
                <?php
            
        
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                ?>
                <br>
                <br>

                <?php
                $external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$enemy'");
                $enemy_forces = mysqli_fetch_assoc($external_stats);
                echo $enemy ?> has <?php echo $enemy_forces['planesLevelOne'] ?> normal planes. you have <?php echo $user_forces['planesLevelOne'] ?> normal planes.
                <br>
                <br>
                <?php echo $enemy ?> has <?php echo $enemy_forces['planesLevelTwo'] ?> improved planes. you have <?php echo $user_forces['planesLevelTwo'] ?> improved planes.
                <br>
                <br>
                do you want to attack <?php echo $enemy ?>'s planes?
                <br>
                <br>


                <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
                how many normal planes do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['planesLevelOne']; ?>" value="0" placeholder="normal planes to send to fight" name="fightingnormalplanes">
                <br>
                <br>
                how many improved planes do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['planesLevelOne']; ?>" value="0" placeholder="improved planes to send to fight" name="fightingimprovedplanes">
                <br>
                <br>

                <!-- <button type="submit" class="attack_air_planes_btn" name="attack_air_planes">Attack planes</button> -->

                <?php
                echo $enemy ?> has <?php echo $enemy_forces['helicoptersLevelOne'] ?> normal helicopters. you have <?php echo $user_forces['helicoptersLevelOne'] ?> normal helicopters.
                <br>
                <br>
                <?php
                echo $enemy ?> has <?php echo $enemy_forces['helicoptersLevelTwo'] ?> improved helicopters. you have <?php echo $user_forces['helicoptersLevelTwo'] ?> improved helicopters.

                <br>
                <br>
                do you want to attack <?php echo $enemy ?>'s helicopters?
                <br>
                <br>

                how many normal helicopters do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['helicoptersLevelOne']; ?>" value="0" placeholder="normal helicopters to send to fight" name="fightingnormalhelicopters">
                <br>
                <br>
                how many improved helicopters do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['helicoptersLevelTwo']; ?>" value="0" placeholder="improved helicopters to send to fight" name="fightingimprovedhelicopters">
                <br>
                <br>

                <!-- <button type="submit" class="attack_air_helicopters_btn" name="attack_air_helicopters">Attack helicopters</button> -->
                <?php

                echo $enemy ?> has <?php echo $enemy_forces['bombersLevelOne'] ?> bombers. you have <?php echo $user_forces['bombersLevelOne'] ?> bombers.
                <br>
                <br>
                do you want to attack <?php echo $enemy ?>'s bombers?
                <br>
                <br>
                how many bombers do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['bombersLevelOne']; ?>" value="0" placeholder="bombers to send to fight" name="fightingbombers">
                <br>
                <br>
              
                <br>
                <br>



                <!-- <button type="submit" class="attack_air_bombers_btn" name="attack_air_bombers">Attack bombers</button> -->
                <input type="hidden" name="anumber" value="<?php echo $conflictStats['attackNumber']; ?>">
                <button type="submit" class="attackingforcesbtn" name="attackingForces">Attack</button>
                    </form>
                   <?php }
                   ?>
                    <br>
                    <br>























        <?php if($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])<=0 && $conflictStats['defenceForcesDeployedForFirstWar']=='yes' && $conflictStats['attackForcesDeployedForFirstWar']=='no')
        {
            ?>
            <form method="POST" action="functions.php">

            <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
            <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" 

           
            ?>  <?php 
            
            
            echo "he has attacked you with $conflictStats[levelOneShipsForFirstDefence] normal ships $conflictStats[levelTwoShipsForFirstDefence] improved ships $conflictStats[levelOneDestroyersForFirstDefence] normal destroyers $conflictStats[levelTwoDestroyersForFirstDefence] improved ships $conflictStats[levelOneSubmarinesForFirstDefence] normal submarines $conflictStats[levelTwoSubmarinesForFirstDefence] improved submarines $conflictStats[levelOneCarriersForFirstDefence] carriers";

            ?>
<form method="POST" action="functions.php">

<input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
<input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
how many normal ships do you want to send to attack the enemy's forces?<br>
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['shipsLevelOne']; ?>" value="0" placeholder="normal ships to send to fight" name="fightingnormalships">
<br>
<br>
how many improved ships do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['shipsLevelTwo']; ?>" value="0" placeholder="improved ships to send to fight" name="fightingimprovedships">
<br>
<br>
<!-- <button type="submit" class="attack_navy_ships_btn" name="attack_navy_ships">Attack ships</button> -->
<br>
<br>

<br>
do you want to attack <?php echo $enemy ?>'s destroyers?
<br>
<br>
how many normal destroyers do you want to send to attack the enemy's forces?<br>
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['destroyersLevelOne']; ?>" value="0" placeholder="normal destroyers to send to fight" name="fightingnormaldestroyers">
<br>
<br>
how many improved destroyers do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['destroyersLevelTwo']; ?>" value="0" placeholder="improved destroyers to send to fight" name="fightingimproveddestroyers">
<br>
<br>


<br>
do you want to attack <?php echo $enemy ?>'s submarines?
<!--
  <button type="submit" class="attack_navy_submarines_btn" name="attack_navy_submarines">Attack submarines</button>
-->
how many normal submarines do you want to send to attack the enemy's forces?<br>
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['submarinesLevelOne']; ?>" value="0" placeholder="normal submarines to send to fight" name="fightingnormalsubmarines">
<br>
<br>
how many improved submarines do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['submarinesLevelTwo']; ?>" value="0" placeholder="improved submarines to send to fight" name="fightingimprovedsubmarines">
<br>
<br>

<br>
<br>


<br>
<br>
do you want to attack <?php echo $enemy ?>'s carriers?
<br>
<br>
how many carriers do you want to send to attack the enemy's forces?<br>
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['carriersLevelOne']; ?>0" value="0" placeholder="normal carriers to send to fight" name="fightingnormalcarriers">
<br>
<br>

<!-- <button type="submit" class="attack_navy_carriers_btn" name="attack_navy_carriers">Attack carriers</button> -->


<?php


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<br>
<br>

<br>



how many untrained soldiers do you want to send to attack the enemy's forces?<br>
<br>

<input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
<input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
<input type="number" min="0" max="<?php echo $user_forces['soldiersLevelOne']; ?>" value="0" placeholder="untrained soldiers to send to fight" name="fightinguntrainedsoldiers">
<br>
<br>
how many trained soldiers do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['soldiersLevelTwo']; ?>" value="0" placeholder="trained soldiers to send to fight" name="fightingtrainedsoldiers">
<br>
<br>

<br>
<!-- <button type="submit" class="attack_army_soldiers_btn" name="attack_army_soldiers">Attack soldiers</button> -->

<br>

<br>
do you want to attack <?php echo $enemy ?>'s artillery?
<br>
<br>
how many normal artilleries do you want to send to attack the enemy's forces?
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['artilleryLevelOne']; ?>" value="0" placeholder="normal artilleries to send to fight" name="fightingnormalartilleries">

<br>
<br>
how many improved artilleries do you want to send to attack the enemy's forces?
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['artilleryLevelTwo']; ?>" value="0" placeholder="improved artilleries to send to fight" name="fightingimprovedartilleries">
<br>
<br>


<!-- <button type="submit" class="attack_army_artillery_btn" name="attack_army_artillery">Attack artillery</button>
-->
<br>
<br>

<br>
do you want to attack <?php echo $enemy ?>'s vehicles?
<br>
<br>
how many normal vehicles do you want to send to attack the enemy's forces?
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['vehiclesLevelOne']; ?>" value="0" placeholder="normal vehicles to send to fight" name="fightingnormalvehicles">

<br>
<br>
how many improved vehicles do you want to send to attack the enemy's forces?
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['vehiclesLevelTwo']; ?>" value="0" placeholder="improved vehicles to send to fight" name="fightingimprovedvehicles">
<br>
<br>


<!-- <button type="submit" class="attack_army_vehicles_btn" name="attack_army_vehicles">Attack vehicles</button> -->


<br>
<br>
<br>
<br>
<br>
<br>
do you want to attack <?php echo $enemy ?>'s weapons?
<br>
<br>
how many normal weapons do you want to send to attack the enemy's forces?
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['weaponsLevelOne']; ?>" value="0" placeholder="normal weapons to send to fight" name="fightingnormalweapons">

<br>
<br>
how many improved weapons do you want to send to attack the enemy's forces?
<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['weaponsLevelTwo']; ?>" value="0" placeholder="improved weapons to send to fight" name="fightingimprovedweapons">
<br>
<br>


<!-- <button type="submit" class="attack_army_weapons_btn" name="attack_army_weapons">Attack weapons</button> -->

<br>
<br>

<br>
<?php


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<br>
<br>




<input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
<input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
how many normal planes do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['planesLevelOne']; ?>" value="0" placeholder="normal planes to send to fight" name="fightingnormalplanes">
<br>
<br>
how many improved planes do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['planesLevelOne']; ?>" value="0" placeholder="improved planes to send to fight" name="fightingimprovedplanes">
<br>
<br>

<!-- <button type="submit" class="attack_air_planes_btn" name="attack_air_planes">Attack planes</button> -->


<br>
<br>
do you want to attack <?php echo $enemy ?>'s helicopters?
<br>
<br>

how many normal helicopters do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['helicoptersLevelOne']; ?>" value="0" placeholder="normal helicopters to send to fight" name="fightingnormalhelicopters">
<br>
<br>
how many improved helicopters do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['helicoptersLevelTwo']; ?>" value="0" placeholder="improved helicopters to send to fight" name="fightingimprovedhelicopters">
<br>
<br>

<!-- <button type="submit" class="attack_air_helicopters_btn" name="attack_air_helicopters">Attack helicopters</button> -->


<br>
<br>
?>                do you want to attack <?php echo $enemy ?>'s bombers?
<br>
<br>
how many bombers do you want to send to attack the enemy's forces?<br>
<br>
<input type="number" min="0" max="<?php echo $user_forces['bombersLevelOne']; ?>" value="0" placeholder="bombers to send to fight" name="fightingbombers">
<br>
<br>






          ?>
          <form method="POST" action="functions.php">
          <input type="hidden" name="cid" value="<?php echo $conflictStats['conflictid']; ?>">
                <button type="submit" class="attackingforcesbtn" name="attackingForces">Attack</button>
      </form>

        
        
                    <?php
           

        }
        if($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])<=0 && $conflictStats['attackForcesDeployedForFirstWar']=='yes'){
            echo " you have already sent out your forces";
        }
        if ($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])>=0 && $conflictStats['attackForcesDeployedForFirstWar'] == 'no') {
            echo "you were too late to react so your forces were deployed automatically";
        } if ($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])>=0 && $conflictStats['defenceForcesDeployedForFirstWar'] == 'yes') {
            echo "good call deploying the forces.fighting is ongoing";
        }
    } 
                }







































        if($conflictStats['defender']==$_SESSION['username']){
        
            
                    echo "<a href=\"warhistory.php?conflictid=" . $cid . "\">" ?>see war history</a>;
                    <br>
                    <br>
                    <?php

        
                    date_default_timezone_set('Asia/kolkata');
                    // $startTimeForFirstAttack=date("Y-m-d H:i:s");
                    // $DeadLineTime = strtotime($conflictStats['MaxTimeForFirstAttackDefence']);
                    // $currentTime = strtotime(date("Y-m-d H:i:s"));
                    // $interval = date_diff($origin, $target);
                    // $diff = $currentTime->diff($DeadLineTime);
                    // $timediff= ((($diff->y * 365.25 + $diff->m * 30 + $diff->d) * 24 + $diff->h) * 60 + $diff->i)*60 + $diff->s;

                    if ($conflictStats['defender'] == $_SESSION['username']) {
                     

                        if ($conflictStats['firstWarConcluded'] == 'no') {

                           



                             
                             


                                if($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])<=0 && $conflictStats['defenceForcesDeployedForFirstWar']=='no' && $conflictStats['attackForcesDeployedForFirstWar']=='no'){
                                    
                                    echo "the enemy has not deployed his forces on you yet";




                                    echo $enemy?> has <?php echo $enemy_forces['shipsLevelOne'] ?> normal ships. you have <?php echo $user_forces['shipsLevelOne'] ?> normal ships.
                    <br>
                    <br>
                    <?php echo $enemy ?> has <?php echo $enemy_forces['shipsLevelTwo'] ?> improved ships. you have <?php echo $user_forces['shipsLevelTwo'] ?> improved ships.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s ships?
                    <br>
                    <br>
                   
                        how many normal ships do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['shipsLevelOne']; ?>" value="0" placeholder="normal ships to send to fight" name="fightingnormalships">
                        <br>
                        <br>
                        how many improved ships do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['shipsLevelTwo']; ?>" value="0" placeholder="improved ships to send to fight" name="fightingimprovedships">
                        <br>
                        <br>
                        <!-- <button type="submit" class="attack_navy_ships_btn" name="attack_navy_ships">Attack ships</button> -->
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['destroyersLevelOne'] ?> normal destroyers. you have <?php echo $user_forces['destroyersLevelOne'] ?> normal destroyers.
                        <br>
                        <br>
                        <?php echo $enemy ?> has <?php echo $enemy_forces['destroyersLevelTwo'] ?> improved destroyers. you have <?php echo $user_forces['destroyersLevelTwo'] ?> improved destroyers.
                        <br>
                        <br>
                        do you want to attack <?php echo $enemy ?>'s destroyers?
                        <br>
                        <br>
                        how many normal destroyers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['destroyersLevelOne']; ?>" value="0" placeholder="normal destroyers to send to fight" name="fightingnormaldestroyers">
                        <br>
                        <br>
                        how many improved destroyers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['destroyersLevelTwo']; ?>" value="0" placeholder="improved destroyers to send to fight" name="fightingimproveddestroyers">
                        <br>
                        <br>

                        <!--
                            <button type="submit" class="attack_navy_destroyers_btn" name="attack_navy_destroyers">Attack destroyers</button> -->
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['submarinesLevelOne'] ?> normal submarines. you have <?php echo $user_forces['submarinesLevelOne'] ?> normal submarines.
                        <br>
                        <br>
                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['submarinesLevelTwo'] ?> improved submarines. you have <?php echo $user_forces['submarinesLevelTwo'] ?> improved submarines.
                        <br>
                        <br>
                        do you want to attack <?php echo $enemy ?>'s submarines?
                        <!--
                            <button type="submit" class="attack_navy_submarines_btn" name="attack_navy_submarines">Attack submarines</button>
                         -->
                        how many normal submarines do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['submarinesLevelOne']; ?>" value="0" placeholder="normal submarines to send to fight" name="fightingnormalsubmarines">
                        <br>
                        <br>
                        how many improved submarines do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['submarinesLevelTwo']; ?>" value="0" placeholder="improved submarines to send to fight" name="fightingimprovedsubmarines">
                        <br>
                        <br>

                        <br>
                        <br>

                        <?php
                        echo $enemy ?> has <?php echo $enemy_forces['carriersLevelOne'] ?> carriers. you have <?php echo $user_forces['carriersLevelOne'] ?> carriers.
                        <br>
                        <br>
                        do you want to attack <?php echo $enemy ?>'s carriers?
                        <br>
                        <br>
                        how many carriers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['carriersLevelOne']; ?>0" value="0" placeholder="normal carriers to send to fight" name="fightingnormalcarriers">
                        <br>
                        <br>

                        <!-- <button type="submit" class="attack_navy_carriers_btn" name="attack_navy_carriers">Attack carriers</button> -->


                    <?php
                

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ?>
                    <br>
                    <br>
                    <?php
                    $external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$enemy'");
                    $enemy_forces = mysqli_fetch_assoc($external_stats);
                    echo $enemy ?> has <?php echo $enemy_forces['soldiersLevelOne'] ?> soldiers. you have <?php echo $user_forces['soldiersLevelOne'] ?> soldiers.
                    <br>
                    <br>
                    <?php echo $enemy ?> has <?php echo $enemy_forces['soldiersLevelTwo'] ?> trained soldiers. you have <?php echo $user_forces['soldiersLevelTwo'] ?> trained soldiers.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s soldiers?
                    <br>
                    <br>
                    <!-- what type of enemy force do you want the soldiers to attack in the enemy nation?
                        <br> -->



                    how many untrained soldiers do you want to send to attack the enemy's forces?<br>
                    <br>

                    <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                    <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
                    <input type="number" min="0" max="<?php echo $user_forces['soldiersLevelOne']; ?>" value="0" placeholder="untrained soldiers to send to fight" name="fightinguntrainedsoldiers">
                    <br>
                    <br>
                    how many trained soldiers do you want to send to attack the enemy's forces?<br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['soldiersLevelTwo']; ?>" value="0" placeholder="trained soldiers to send to fight" name="fightingtrainedsoldiers">
                    <br>
                    <br>

                    <br>
                    <!-- <button type="submit" class="attack_army_soldiers_btn" name="attack_army_soldiers">Attack soldiers</button> -->

                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['artilleryLevelOne'] ?> normal artillery. you have <?php echo $user_forces['artilleryLevelOne'] ?> normal artillery. <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['artilleryLevelTwo'] ?> improved artillery. you have <?php echo $user_forces['artilleryLevelTwo'] ?> improved artillery.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s artillery?
                    <br>
                    <br>
                    how many normal artilleries do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['artilleryLevelOne']; ?>" value="0" placeholder="normal artilleries to send to fight" name="fightingnormalartilleries">

                    <br>
                    <br>
                    how many improved artilleries do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['artilleryLevelTwo']; ?>" value="0" placeholder="improved artilleries to send to fight" name="fightingimprovedartilleries">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_artillery_btn" name="attack_army_artillery">Attack artillery</button>
                         -->
                    <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['vehiclesLevelOne'] ?> normal vehicles. you have <?php echo $user_forces['vehiclesLevelOne'] ?> normal vehicles.
                    <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['vehiclesLevelTwo'] ?> improved vehicles. you have <?php echo $user_forces['vehiclesLevelTwo'] ?> improved vehicles.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s vehicles?
                    <br>
                    <br>
                    how many normal vehicles do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['vehiclesLevelOne']; ?>" value="0" placeholder="normal vehicles to send to fight" name="fightingnormalvehicles">

                    <br>
                    <br>
                    how many improved vehicles do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['vehiclesLevelTwo']; ?>" value="0" placeholder="improved vehicles to send to fight" name="fightingimprovedvehicles">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_vehicles_btn" name="attack_army_vehicles">Attack vehicles</button> -->


                    <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['weaponsLevelOne'] ?> normal weapons. you have <?php echo $user_forces['weaponsLevelOne'] ?> normal weapons.
                    <br>
                    <br>
                    <?php
                    echo $enemy ?> has <?php echo $enemy_forces['weaponsLevelTwo'] ?> improved weapons. you have <?php echo $user_forces['weaponsLevelTwo'] ?> improved weapons.
                    <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s weapons?
                    <br>
                    <br>
                    how many normal weapons do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['weaponsLevelOne']; ?>" value="0" placeholder="normal weapons to send to fight" name="fightingnormalweapons">

                    <br>
                    <br>
                    how many improved weapons do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['weaponsLevelTwo']; ?>" value="0" placeholder="improved weapons to send to fight" name="fightingimprovedweapons">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_weapons_btn" name="attack_army_weapons">Attack weapons</button> -->

                    <br>
                    <br>

                    <br>
                <?php
            
        
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                ?>
                <br>
                <br>

                <?php
                $external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$enemy'");
                $enemy_forces = mysqli_fetch_assoc($external_stats);
                echo $enemy ?> has <?php echo $enemy_forces['planesLevelOne'] ?> normal planes. you have <?php echo $user_forces['planesLevelOne'] ?> normal planes.
                <br>
                <br>
                <?php echo $enemy ?> has <?php echo $enemy_forces['planesLevelTwo'] ?> improved planes. you have <?php echo $user_forces['planesLevelTwo'] ?> improved planes.
                <br>
                <br>
                do you want to attack <?php echo $enemy ?>'s planes?
                <br>
                <br>


                <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
                how many normal planes do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['planesLevelOne']; ?>" value="0" placeholder="normal planes to send to fight" name="fightingnormalplanes">
                <br>
                <br>
                how many improved planes do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['planesLevelOne']; ?>" value="0" placeholder="improved planes to send to fight" name="fightingimprovedplanes">
                <br>
                <br>

                <!-- <button type="submit" class="attack_air_planes_btn" name="attack_air_planes">Attack planes</button> -->

                <?php
                echo $enemy ?> has <?php echo $enemy_forces['helicoptersLevelOne'] ?> normal helicopters. you have <?php echo $user_forces['helicoptersLevelOne'] ?> normal helicopters.
                <br>
                <br>
                <?php
                echo $enemy ?> has <?php echo $enemy_forces['helicoptersLevelTwo'] ?> improved helicopters. you have <?php echo $user_forces['helicoptersLevelTwo'] ?> improved helicopters.

                <br>
                <br>
                do you want to attack <?php echo $enemy ?>'s helicopters?
                <br>
                <br>

                how many normal helicopters do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['helicoptersLevelOne']; ?>" value="0" placeholder="normal helicopters to send to fight" name="fightingnormalhelicopters">
                <br>
                <br>
                how many improved helicopters do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['helicoptersLevelTwo']; ?>" value="0" placeholder="improved helicopters to send to fight" name="fightingimprovedhelicopters">
                <br>
                <br>

                <!-- <button type="submit" class="attack_air_helicopters_btn" name="attack_air_helicopters">Attack helicopters</button> -->
                <?php

                echo $enemy ?> has <?php echo $enemy_forces['bombersLevelOne'] ?> bombers. you have <?php echo $user_forces['bombersLevelOne'] ?> bombers.
                <br>
                <br>
                do you want to attack <?php echo $enemy ?>'s bombers?
                <br>
                <br>
                how many bombers do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['bombersLevelOne']; ?>" value="0" placeholder="bombers to send to fight" name="fightingbombers">
                <br>
                <br>
              
                <br>
                <br>
                                ?>
                                    
                                
                                <?php
                                }

























                                elseif($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])<=0 && $conflictStats['defenceForcesDeployedForFirstWar']=='no' && $conflictStats['attackForcesDeployedForFirstWar']=='yes'){
                                   

echo "he has attacked you with $conflictStats[levelOneShipsForFirstAttack] normal ships $conflictStats[levelTwoShipsForFirstAttack] improved ships $conflictStats[levelOneDestroyersForFirstAttack] normal destroyers $conflictStats[levelTwoDestroyersForFirstAttack] improved ships $conflictStats[levelOneSubmarinesForFirstAttack] normal submarines $conflictStats[levelTwoSubmarinesForFirstAttack] improved submarines $conflictStats[levelOneCarriersForFirstAttack] carriers";

                                      ?>
                    <form method="POST" action="functions.php">

                        <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                        <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
                        how many normal ships do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['shipsLevelOne']; ?>" value="0" placeholder="normal ships to send to fight" name="defendingnormalships">
                        <br>
                        <br>
                        how many improved ships do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['shipsLevelTwo']; ?>" value="0" placeholder="improved ships to send to fight" name="defendingimprovedships">
                        <br>
                        <br>
                        <!-- <button type="submit" class="attack_navy_ships_btn" name="attack_navy_ships">Attack ships</button> -->
                        <br>
                        <br>
                       
                        <br>
                        do you want to attack <?php echo $enemy ?>'s destroyers?
                        <br>
                        <br>
                        how many normal destroyers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['destroyersLevelOne']; ?>" value="0" placeholder="normal destroyers to send to fight" name="defendingnormaldestroyers">
                        <br>
                        <br>
                        how many improved destroyers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['destroyersLevelTwo']; ?>" value="0" placeholder="improved destroyers to send to fight" name="defendingimproveddestroyers">
                        <br>
                        <br>

                       
                        <br>
                        do you want to attack <?php echo $enemy ?>'s submarines?
                        <!--
                            <button type="submit" class="attack_navy_submarines_btn" name="attack_navy_submarines">Attack submarines</button>
                         -->
                        how many normal submarines do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['submarinesLevelOne']; ?>" value="0" placeholder="normal submarines to send to fight" name="defendingnormalsubmarines">
                        <br>
                        <br>
                        how many improved submarines do you want to send to attack the enemy's forces?<br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['submarinesLevelTwo']; ?>" value="0" placeholder="improved submarines to send to fight" name="defendingimprovedsubmarines">
                        <br>
                        <br>

                        <br>
                        <br>

                     
                        <br>
                        <br>
                        do you want to attack <?php echo $enemy ?>'s carriers?
                        <br>
                        <br>
                        how many carriers do you want to send to attack the enemy's forces?<br>
                        <br>
                        <br>
                        <input type="number" min="0" max="<?php echo $user_forces['carriersLevelOne']; ?>0" value="0" placeholder="normal carriers to send to fight" name="defendingnormalcarriers">
                        <br>
                        <br>

                        <!-- <button type="submit" class="attack_navy_carriers_btn" name="attack_navy_carriers">Attack carriers</button> -->


                    <?php
                

                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    ?>
                    <br>
                    <br>
                   
                    <br>
                   


                    how many untrained soldiers do you want to send to attack the enemy's forces?<br>
                    <br>

                    <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                    <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
                    <input type="number" min="0" max="<?php echo $user_forces['soldiersLevelOne']; ?>" value="0" placeholder="untrained soldiers to send to fight" name="defendinguntrainedsoldiers">
                    <br>
                    <br>
                    how many trained soldiers do you want to send to attack the enemy's forces?<br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['soldiersLevelTwo']; ?>" value="0" placeholder="trained soldiers to send to fight" name="defendingtrainedsoldiers">
                    <br>
                    <br>

                    <br>
                    <!-- <button type="submit" class="attack_army_soldiers_btn" name="attack_army_soldiers">Attack soldiers</button> -->

                    <br>
        
                    <br>
                    do you want to attack <?php echo $enemy ?>'s artillery?
                    <br>
                    <br>
                    how many normal artilleries do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['artilleryLevelOne']; ?>" value="0" placeholder="normal artilleries to send to fight" name="defendingnormalartilleries">

                    <br>
                    <br>
                    how many improved artilleries do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['artilleryLevelTwo']; ?>" value="0" placeholder="improved artilleries to send to fight" name="defendingimprovedartilleries">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_artillery_btn" name="attack_army_artillery">Attack artillery</button>
                         -->
                    <br>
                    <br>
    
                    <br>
                    do you want to attack <?php echo $enemy ?>'s vehicles?
                    <br>
                    <br>
                    how many normal vehicles do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['vehiclesLevelOne']; ?>" value="0" placeholder="normal vehicles to send to fight" name="defendingnormalvehicles">

                    <br>
                    <br>
                    how many improved vehicles do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['vehiclesLevelTwo']; ?>" value="0" placeholder="improved vehicles to send to fight" name="defendingimprovedvehicles">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_vehicles_btn" name="attack_army_vehicles">Attack vehicles</button> -->


                    <br>
                    <br>
               <br>
                    <br>
                   <br>
                    <br>
                    do you want to attack <?php echo $enemy ?>'s weapons?
                    <br>
                    <br>
                    how many normal weapons do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['weaponsLevelOne']; ?>" value="0" placeholder="normal weapons to send to fight" name="defendingnormalweapons">

                    <br>
                    <br>
                    how many improved weapons do you want to send to attack the enemy's forces?
                    <br>
                    <br>
                    <input type="number" min="0" max="<?php echo $user_forces['weaponsLevelTwo']; ?>" value="0" placeholder="improved weapons to send to fight" name="defendingimprovedweapons">
                    <br>
                    <br>


                    <!-- <button type="submit" class="attack_army_weapons_btn" name="attack_army_weapons">Attack weapons</button> -->

                    <br>
                    <br>

                    <br>
                <?php
            
        
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                ?>
                <br>
                <br>

                


                <input type="hidden" name="enemyusername" value="<?php echo $enemy; ?>">
                <input type="hidden" name="conflictid" value="<?php echo $_GET['conflictid']; ?>" ?>
                how many normal planes do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['planesLevelOne']; ?>" value="0" placeholder="normal planes to send to fight" name="defendingnormalplanes">
                <br>
                <br>
                how many improved planes do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['planesLevelOne']; ?>" value="0" placeholder="improved planes to send to fight" name="defendingimprovedplanes">
                <br>
                <br>

                <!-- <button type="submit" class="attack_air_planes_btn" name="attack_air_planes">Attack planes</button> -->

            
                <br>
                <br>
                do you want to attack <?php echo $enemy ?>'s helicopters?
                <br>
                <br>

                how many normal helicopters do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['helicoptersLevelOne']; ?>" value="0" placeholder="normal helicopters to send to fight" name="defendingnormalhelicopters">
                <br>
                <br>
                how many improved helicopters do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['helicoptersLevelTwo']; ?>" value="0" placeholder="improved helicopters to send to fight" name="defendingimprovedhelicopters">
                <br>
                <br>

                <!-- <button type="submit" class="attack_air_helicopters_btn" name="attack_air_helicopters">Attack helicopters</button> -->
               

                <br>
                <br>
?>                do you want to attack <?php echo $enemy ?>'s bombers?
                <br>
                <br>
                how many bombers do you want to send to attack the enemy's forces?<br>
                <br>
                <input type="number" min="0" max="<?php echo $user_forces['bombersLevelOne']; ?>" value="0" placeholder="bombers to send to fight" name="defendingbombers">
                <br>
                <br>






                                    ?>
                                    <form method="POST" action="functions.php">
                                    <input type="hidden" name="cid" value="<?php echo $conflictStats['conflictid']; ?>">

                                    <button type="submit" class="deploydefenceforcesforfirstdefend" name="deployForcesForFirstDefence">send the forces</button>
                                </form>

                    <?php
                            
                        }
                        
                        if($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])<=0 && $conflictStats['defenceForcesDeployedForFirstWar']=='yes'){
                            echo "you have already sent out your forces";
                        }
                        if ($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])>=0 && $conflictStats['defenceForcesDeployedForFirstWar'] == 'no') {
                            echo "you were too late to react so your forces were deployed automatically";
                        } if ($currentTime- strtotime($conflictStats['prepTimeEndForFirstWar'])>=0 && $conflictStats['defenceForcesDeployedForFirstWar'] == 'yes') {
                            echo "good call deploying the forces";
                        }
                        elseif ($conflictStats['firstWarConcluded'] == 'yes') {
                           
                            echo "ready for $attackNumber attack?";
                        }  
                    }
                
                
    }
            }
            
        }
    }
        }
    
             
            
            
              else {
                    ?>
                <?php
                    echo "log in first to see this page   ";
                }
                ?>


    </section>