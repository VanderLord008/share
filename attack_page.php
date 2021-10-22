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


            soldiers= <?php    $stats_rank=mysqli_query($con,"SELECT * FROM `forces` WHERE `username`='$un'");
            $s_rank=mysqli_fetch_assoc($stats_rank);
            echo $s_rank['soldiers'];?>

            <form method="POST" action="functions.php">
                
                <input type="hidden" name="enemyusername" value="<?php echo $un; ?>">
                <button type="submit" class="attack_soldiers_btn" name="attack_soldiers" >Attack soldiers</button>
            </form>

            <br>
            artillery= <?php    $stats_rank=mysqli_query($con,"SELECT * FROM `forces` WHERE `username`='$un'");
            $s_rank=mysqli_fetch_assoc($stats_rank);
            echo $s_rank['artillery'];

?>


</section>