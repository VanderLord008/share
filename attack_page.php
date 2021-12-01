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

this is the attack page

<br>


<?php
        $un=$_GET['username'];
        $user_check=mysqli_query($con,"SELECT * from `registered_user` WHERE `username`='$un'");
            if(mysqli_num_rows($user_check)==0)
            {
                echo "this user doesnt exist";
            }
            else if($un==$user_data['username'])
            {
                echo "
                        <script>
                        window.location.href='index.php';
                        </script>
                    ";
            }
            else 
            {
            $un=$_GET['username'];

            $user_check=mysqli_query($con,"SELECT * from `registered_user` WHERE `username`='$un'");
            $s_user=mysqli_fetch_assoc($user_check);
            $stats_stats=mysqli_query($con,"SELECT * FROM `registered_user` WHERE `username`='$un'");
            $s_stats=mysqli_fetch_assoc($stats_stats);
            echo $s_user['username'];
            ?>
            <br>
            <?php
            $stats_rank=mysqli_query($con,"SELECT * FROM `stats` WHERE `username`='$un'");
            $s_rank=mysqli_fetch_assoc($stats_rank);
          
            ?>
            money = <?php echo $s_rank['money'];?>
            <br>


           

            <form method="POST" >
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_land_forces_btn" name="attack_land_forces" >Attack land forces</button>
            </form>
            <form method="POST" >
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_air_forces_btn" name="attack_air_forces" >Attack air forces</button>
            </form>
            <form method="POST" >
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_navy_forces_btn" name="attack_navy_forces" >Attack navy</button>
            </form>
            
            <br>
           
          
        </form>
 

            
<?php
if (isset($_POST['attack_navy_forces'])) {
?>
you have chose to attack navy
<br>
<br>

<?php
$external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
$enemy_stats = mysqli_fetch_assoc($external_stats);
echo $un?> has <?php echo $enemy_stats['ships']?> ships. you have <?php echo $user_forces['ships']?> ships.
<br>
do you want to attack <?php echo $un?>'s ships?
<form method="POST" action="functions.php" >
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_navy_ships_btn" name="attack_navy_ships" >Attack ships</button>
            </form>
            <br>
<?php
echo $un?> has <?php echo $enemy_stats['destroyers']?> destroyers. you have <?php echo $user_forces['destroyers']?> destroyers.

<br>
do you want to attack <?php echo $un?>'s destroyers?
<form method="POST" action="functions.php" >
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_navy_destroyers_btn" name="attack_navy_destroyers" >Attack destroyers</button>
            </form>
            <br>
<br>
<?php
echo $un?> has <?php echo $enemy_stats['submarines']?> submarines. you have <?php echo $user_forces['submarines']?> submarines.
<br>
do you want to attack <?php echo $un?>'s submarines?
<form method="POST" action="functions.php" >
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_navy_submarines_btn" name="attack_navy_submarines" >Attack submarines</button>
            </form>

            <br>
<br>
<?php
echo $un?> has <?php echo $enemy_stats['carriers']?> carriers. you have <?php echo $user_forces['carriers']?> carriers.
<br>
do you want to attack <?php echo $un?>'s carriers?
<form method="POST" action="functions.php" >
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_navy_carriers_btn" name="attack_navy_carriers" >Attack carriers</button>
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
    $external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($external_stats);
    echo $un?> has <?php echo $enemy_stats['soldiers']?> soldiers. you have <?php echo $user_forces['soldiers']?> soldiers.
    <br>
    do you want to attack <?php echo $un?>'s soldiers?
    <form method="POST" action="functions.php" >
                    
                    <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                    <button type="submit" class="attack_army_soldiers_btn" name="attack_army_soldiers" >Attack soldiers</button>
                </form>
                <br>
    <?php
    echo $un?> has <?php echo $enemy_stats['artillery']?> artillery. you have <?php echo $user_forces['artillery']?> artillery.
    
    <br>
    do you want to attack <?php echo $un?>'s artillery?
    <form method="POST" action="functions.php" >
                    
                    <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                    <button type="submit" class="attack_army_artillery_btn" name="attack_army_artillery" >Attack artillery</button>
                </form>
                <br>
    <br>
    <?php
    echo $un?> has <?php echo $enemy_stats['vehicles']?> vehicles. you have <?php echo $user_forces['vehicles']?> vehicles.
    <br>
    do you want to attack <?php echo $un?>'s vehicles?
    <form method="POST" action="functions.php" >
                    
                    <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                    <button type="submit" class="attack_army_vehicles_btn" name="attack_army_vehicles" >Attack vehicles</button>
                </form>
    
                <br>
    <br>
    <?php
    echo $un?> has <?php echo $enemy_stats['weapons']?> weapons. you have <?php echo $user_forces['weapons']?> weapons.
    <br>
    do you want to attack <?php echo $un?>'s weapons?
    <form method="POST" action="functions.php" >
                    
                    <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                    <button type="submit" class="attack_army_weapons_btn" name="attack_army_weapons" >Attack weapons</button>
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
    $external_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($external_stats);
    echo $un?> has <?php echo $enemy_stats['planes']?> planes. you have <?php echo $user_forces['planes']?> planes.
    <br>
    do you want to attack <?php echo $un?>'s planes?
    <form method="POST" action="functions.php" >
                    
                    <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                    <button type="submit" class="attack_air_planes_btn" name="attack_air_planes" >Attack planes</button>
                </form>
                <br>
    <?php
    echo $un?> has <?php echo $enemy_stats['helicopters']?> helicopters. you have <?php echo $user_forces['helicopters']?> helicopters.
    
    <br>
    do you want to attack <?php echo $un?>'s helicopters?
    <form method="POST" action="functions.php" >
                    
                    <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                    <button type="submit" class="attack_air_helicopters_btn" name="attack_air_helicopters" >Attack helicopters</button>
                </form>
                <br>
    <br>
    <?php
    echo $un?> has <?php echo $enemy_stats['bombers']?> bombers. you have <?php echo $user_forces['bombers']?> bombers.
    <br>
    do you want to attack <?php echo $un?>'s bombers?
    <form method="POST" action="functions.php" >
                    
                    <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                    <button type="submit" class="attack_air_bombers_btn" name="attack_air_bombers" >Attack bombers</button>
                </form>
    
                <br>
    <br>
    
    <?php
}



} }
else {
?>
<?php 
echo "log in first to see this page";

}
?>


</section>