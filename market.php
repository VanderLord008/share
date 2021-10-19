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


following offers are on the market

you can see all the offers on the market

<br>


<?php
$con=new mysqli("localhost","root","","test");
$players="SELECT `offer_id`,`username`,`sell_soldiers`,`soldier_sell_price` FROM `trade` where `sell_soldiers`!='0' ORDER BY `soldier_sell_price` ASC ";
$p=mysqli_query($con,$players);
while($row = mysqli_fetch_assoc($p)){
    ?><?php
    $get_user="SELECT `username` FROM `trade` WHERE `username`='$row[username]'";
    $get_use=mysqli_query($con,$get_user);
    $name=mysqli_fetch_assoc($get_use);
    ?>
    seller = <?php echo" <a href=\"external_page.php?username=" .$row['username']."\">" .$name['username'] . "</a>";?>
    <br>
    <?php
    $get_soldierstosell="SELECT `sell_soldiers` FROM `trade` WHERE `offer_id`='$row[offer_id]'";
    $get_sellsoldiers=mysqli_query($con,$get_soldierstosell);
    $soldiers=mysqli_fetch_assoc($get_sellsoldiers);
    ?>number of soldiers = <?php echo $soldiers['sell_soldiers'];
    ?><br><?php
    
    $get_soldiersprice="SELECT `soldier_sell_price` FROM `trade` WHERE `offer_id`='$row[offer_id]'";
    $get_soldiersprices=mysqli_query($con,$get_soldiersprice);
    $rank_price=mysqli_fetch_assoc($get_soldiersprices);
    ?>price of soldiers = <?php echo $rank_price['soldier_sell_price'];

    ?><br><br><?php

}
?>











</section>