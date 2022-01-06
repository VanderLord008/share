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

<?php
$conflicts = "SELECT * FROM `conflicts`";
                        $p = mysqli_query($con, $conflicts);
                        while ($row = mysqli_fetch_assoc($p)) {
                            $current=date("Y-m-d H:i:s");
                            $currentTime=strtotime($current);
                                if($currentTime- strtotime($row['MaxTimeForFirstAttackDefence'])>0)
                                {
                                    $q1="UPDATE `conflicts` SET `TimeForDefendingAgainstFirstAttack`='over' WHERE `conflictid`='$row[conflictid]'";
                                    mysqli_query($con,$q1);
                                }
                                //firstAttackConcluded

                                if($currentTime- strtotime($row['JourneyTimeForFirstAttack'])>0)
                                {
                                    $q1="UPDATE `conflicts` SET `firstAttackConcluded`='yes' WHERE `conflictid`='$row[conflictid]'";
                                    mysqli_query($con,$q1);
                                }

                            
?>
                        <?php


                            //updating first attack status for everyone









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