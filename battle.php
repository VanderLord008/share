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
 These are the nations you can fight
        <br>
        <br>
        <?php
        $con = new mysqli("localhost", "root", "", "test");
        $rankingnumber = $user_forces['soldiersLevelOne'] + $user_forces['vehicles'] + $user_forces['artilleryLevelOne'];
        $query = "UPDATE `stats` SET `ranking`='$rankingnumber' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con, $query);
        ?>

        <?php

        $players = "SELECT `username`, `money`, `ranking` FROM `stats` WHERE `ranking`>'0' ORDER BY `ranking` DESC";
        $p = mysqli_query($con, $players);
        while ($row = mysqli_fetch_assoc($p)) {
        ?>rank= <?php echo $row['ranking'];
            ?><br><?php
            $get_user = "SELECT `username` FROM `stats` WHERE `username`='$row[username]'";
            $get_use = mysqli_query($con, $get_user);
            $rank_name = mysqli_fetch_assoc($get_use);
            ?>
        user= <?php echo " <a href=\"external_page.php?username=" . $row['username'] . "\">" . $rank_name['username'] . "</a>"; ?>
        <br>
        <?php
            $get_money = "SELECT `money` FROM `stats` WHERE `username`='$row[username]'";
            $get_mone = mysqli_query($con, $get_money);
            $rank_money = mysqli_fetch_assoc($get_mone);
        ?>money= <?php echo $rank_money['money'];
                ?><br>


        <?php
            $get_soldiers = "SELECT `soldiers` FROM `forces` WHERE `username`='$row[username]'";
            $get_soldier = mysqli_query($con, $get_soldiers);
            $num_soldiers = mysqli_fetch_assoc($get_soldier);
        ?>soldiers= <?php echo $num_soldiers['soldiersLevelOne'];
                ?>
        <br>


        <?php
            $get_artilleries = "SELECT `artillery` FROM `forces` WHERE `username`='$row[username]'";
            $get_artillery = mysqli_query($con, $get_artilleries);
            $num_artillery = mysqli_fetch_assoc($get_artillery);
        ?>artillery= <?php echo $num_artillery['artillery'];
                    ?>
        <br>


        <?php
            $get_vehicles = "SELECT `vehicles` FROM `forces` WHERE `username`='$row[username]'";
            $get_vehicle = mysqli_query($con, $get_vehicles);
            $num_vehicles = mysqli_fetch_assoc($get_vehicle);
        ?>vehicles= <?php echo $num_vehicles['vehicles'];
                ?>
        <br>


        <?php
            $get_weapons = "SELECT `weapons` FROM `forces` WHERE `username`='$row[username]'";
            $get_weapon = mysqli_query($con, $get_weapons);
            $num_weapons = mysqli_fetch_assoc($get_weapon);
        ?>weapons= <?php echo $num_weapons['weapons'];
                ?>
        <br>


        <br>
        <br>



























    <?php
        }
    ?>



<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>

       


    </section>