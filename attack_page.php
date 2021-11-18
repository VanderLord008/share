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


<?php  $un=$_GET['username'];

$user_check=mysqli_query($con,"SELECT * from `registered_user` WHERE `username`='$un'");
            $s_user=mysqli_fetch_assoc($user_check);
            $stats_stats=mysqli_query($con,"SELECT * FROM `registered_user` WHERE `username`='$un'");
            $s_stats=mysqli_fetch_assoc($stats_stats);
            echo $s_user['username'];
            ?><br><?php
            $stats_rank=mysqli_query($con,"SELECT * FROM `stats` WHERE `username`='$un'");
            $s_rank=mysqli_fetch_assoc($stats_rank);
          
            ?>money = <?php echo $s_rank['money'];
            ?>
            <br>


           

            <form method="POST" action="functions.php">
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_land_forces_btn" name="attack_land_forces" >Attack land forces</button>
            </form>
            <form method="POST" action="functions.php">
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_air_forces_btn" name="attack_air_forces" >Attack air forces</button>
            </form>
            <form method="POST" action="functions.php">
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_navy_forces_btn" name="attack_navy_forces" >Attack navy</button>
            </form>

            <br>
           
          
        </form>
 


<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>


</section>