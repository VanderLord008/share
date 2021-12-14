<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreign nation</title>
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

this is the page to see the enemies nation
<br>

<?php
if(!isset($_SESSION['username'])){
    echo "you must be logged in to see this page";
}
else
{
    if(!isset($_GET['username']))
    {
        echo "incorrect way to see this";
    }
    else
    {
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
            $s_user=mysqli_fetch_assoc($user_check);
            $stats_stats=mysqli_query($con,"SELECT * FROM `registered_user` WHERE `username`='$un'");
            $s_stats=mysqli_fetch_assoc($stats_stats);
            $states_states=mysqli_query($con,"SELECT * FROM `states` WHERE `username`='$un'");
            $s_states=mysqli_fetch_assoc($states_states);
            $stats_rank=mysqli_query($con,"SELECT * FROM `stats` WHERE `username`='$un'");
            $s_rank=mysqli_fetch_assoc($stats_rank);
            ?>this page belongs to <?php echo $s_user['username'];
            ?><br>
             <?php
             echo $s_user['username'];?> has <?php
            echo $s_rank['money'];
            ?> dollars
            <br><br><br>
            this player has following states
            <br>
            <?php
            
            $snum=$s_states['statecounter'];
for($i=1;$i<=$snum;$i++)
{
?>
state= <a href="statepage.php?stateid=<?php echo $s_states['state'.$i.'id']; ?>"><?php echo $s_states['state'.$i]?></a>
<br>



<?php
}

?>
   <?php

$players = "SELECT `username`, `money`, `ranking` FROM `stats` WHERE `ranking`>'0' ORDER BY `ranking` DESC";
$p = mysqli_query($con, $players);
while ($row = mysqli_fetch_assoc($p)) {
    if($row['username']==$_SESSION['username'])
    {
        continue;
    }
?>rank= <?php echo $row['ranking'];
    ?><br><?php
    $get_user = "SELECT `username` FROM `stats` WHERE `username`='$row[username]'";
    $get_use = mysqli_query($con, $get_user);
    $rank_name = mysqli_fetch_assoc($get_use);
    ?>
user= <?php echo " <a href=\"foriegnnation.php?username=" . $row['username'] . "\">" . $rank_name['username'] . "</a>"; ?>
<br>
<?php
    $get_money = "SELECT `money` FROM `stats` WHERE `username`='$row[username]'";
    $get_mone = mysqli_query($con, $get_money);
    $rank_money = mysqli_fetch_assoc($get_mone);
?>money= <?php echo $rank_money['money'];
        ?><br>


<?php
    $get_soldiersl1 = "SELECT `soldiersLevelOne` FROM `forces` WHERE `username`='$row[username]'";
    $get_soldierl1 = mysqli_query($con, $get_soldiersl1);
    $num_soldiersl1 = mysqli_fetch_assoc($get_soldierl1);
?>untrained soldiers= <?php echo $num_soldiersl1['soldiersLevelOne'];
?><br><?php
$get_soldiersl2 = "SELECT `soldiersLevelTwo` FROM `forces` WHERE `username`='$row[username]'";
$get_soldierl2 = mysqli_query($con, $get_soldiersl2);
$num_soldiersl2 = mysqli_fetch_assoc($get_soldierl2);
?> trained soldiers= <?php echo $num_soldiersl2['soldiersLevelTwo'];
        ?>
<br>


<?php
    $get_artilleriesl1 = "SELECT `artilleryLevelOne` FROM `forces` WHERE `username`='$row[username]'";
    $get_artilleryl1 = mysqli_query($con, $get_artilleriesl1);
    $num_artilleryl1 = mysqli_fetch_assoc($get_artilleryl1);
?>normal artilleries= <?php echo $num_artilleryl1['artilleryLevelOne'];
?><br><?php
$get_artilleriesl2 = "SELECT `artilleryLevelTwo` FROM `forces` WHERE `username`='$row[username]'";
    $get_artilleryl2 = mysqli_query($con, $get_artilleriesl2);
    $num_artilleryl2 = mysqli_fetch_assoc($get_artilleryl2);
?>improved artilleries= <?php echo $num_artilleryl2['artilleryLevelTwo'];
            ?>
<br>


<?php
    $get_vehiclesl1 = "SELECT `vehiclesLevelOne` FROM `forces` WHERE `username`='$row[username]'";
    $get_vehiclel1 = mysqli_query($con, $get_vehiclesl1);
    $num_vehiclesl1 = mysqli_fetch_assoc($get_vehiclel1);
?>normal vehicles= <?php echo $num_vehiclesl1['vehiclesLevelOne'];
?><br><?php
$get_vehiclesl2 = "SELECT `vehiclesLevelTwo` FROM `forces` WHERE `username`='$row[username]'";
    $get_vehiclel2 = mysqli_query($con, $get_vehiclesl2);
    $num_vehiclesl2 = mysqli_fetch_assoc($get_vehiclel2);
?>improved vehicles= <?php echo $num_vehiclesl2['vehiclesLevelTwo'];

        ?>
<br>


<?php
    $get_weaponsl1 = "SELECT `weaponsLevelOne` FROM `forces` WHERE `username`='$row[username]'";
    $get_weaponl1 = mysqli_query($con, $get_weaponsl1);
    $num_weaponsl1 = mysqli_fetch_assoc($get_weaponl1);
?>normal weapons= <?php echo $num_weaponsl1['weaponsLevelOne'];
?><br><?php
$get_weaponsl2 = "SELECT `weaponsLevelTwo` FROM `forces` WHERE `username`='$row[username]'";
$get_weaponl2 = mysqli_query($con, $get_weaponsl2);
$num_weaponsl2 = mysqli_fetch_assoc($get_weaponl2);
?>improved weapons= <?php echo $num_weaponsl2['weaponsLevelTwo'];
        ?>
<br>


<br>
<br>



























<?php
}
?>
            <br>
            <br>
            <br>
            <br>
            want to attack this nation? 
            <br>
                
        
            
            <form method="POST" action="functions.php">
                    <input type="hidden" name="defendernation" value="<?php echo $s_user['username']; ?>">
                    <select name="warType">
                        <option value= "typeone"> type one </option>
                        <option value= "typetwo"> type two </option> 
                        <option value= "typethree"> type three </option> 

                    </select>
                    <button type="submit" class="attackforeignnationbtm" name="attackForeignNation">attack this nation</button>
                </form>
            
            <?php
        }
    }
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