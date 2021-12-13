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


        hello this is the ranking page
        <br>
        <br>





        <?php
        $rankforshow=0;
        $con = new mysqli("localhost", "root", "", "test");
        $rankingnumber = $user_forces['soldiersLevelOne'] + $user_forces['vehicles'] + $user_forces['artillery'];
        $query = "UPDATE `stats` SET `ranking`='$rankingnumber' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con, $query);
        ?>

        <?php

        $players = "SELECT `username`, `money`, `ranking` FROM `stats` WHERE `ranking`>'0' ORDER BY `ranking` DESC";
        $p = mysqli_query($con, $players);
        while ($row = mysqli_fetch_assoc($p)) {
            
        ?>rank= <?php echo ++$rankforshow;
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
                ?><br><br><?php

        }
            ?>










    </section>