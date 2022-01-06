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

Hello <?php echo $user_data['username'];

$currenttime=date("Y-m-d H:i:s");
echo " time is "; echo $currenttime;
?>

<form method="POST" action="functions.php">
            <button type="submit" class="timetrialbtm" name="timetrial">try</button>
</form>
            <br>

again <?php print_r(getdate());  
?> <br><br>start time is = <?php
echo $user_data['starttime'];
?> <br>
end time is = <?php echo $user_data['endtime'];
?><br>
difference is = <?php

$origin = date_create($user_data['starttime']);
$target = date_create($user_data['endtime']);
// $interval = date_diff($origin, $target);
$diff = $origin->diff($target);
$timediff= ((($diff->y * 365.25 + $diff->m * 30 + $diff->d) * 24 + $diff->h) * 60 + $diff->i)*60 + $diff->s;
echo $timediff;?><br><br>



<?php




function seconds2human($ss) {
    $s = $ss%60;
    $m = floor(($ss%3600)/60);
    $h = floor(($ss%86400)/3600);
    $d = floor(($ss%2592000)/86400);
    $M = floor($ss/2592000);
    
    return "$M months, $d days, $h hours, $m minutes, $s seconds";
    }




echo seconds2human($timediff);




    
?>
<br>
<br>
<?php
$new2=date_create($currenttime)->diff($origin);
$new= ((($new2->y * 365.25 + $new2->m * 30 + $new2->d) * 24 + $new2->h) * 60 + $new2->i)*60 + $new2->s;
if($new>=60)
{
    echo "wait for your turn";
}
else if($new<60)
{
    echo " go ahead";
}
echo "/////////////////////////////////////////////////";
?><br>
<br>
<br>
<?php
    
$values=mysqli_query($con,"SELECT * FROM `conflicts` WHERE `conflictid`='1975545046'");
$uservalues=mysqli_fetch_assoc($values);



$ctime=date("Y-m-d H:i:s");
echo "current time is "; echo strtotime($ctime); echo " in normal words it is " ; echo $ctime;
?>
<br>
<?php echo "starttime is "; echo strtotime($uservalues['startTimeForFirstAttack']); echo " in normal words it is " ; echo $uservalues['startTimeForFirstAttack'];

$timeInSeconds=((3600*6+(strtotime($ctime)-strtotime($uservalues['startTimeForFirstAttack'])))/2)+strtotime($uservalues['startTimeForFirstAttack']);
$timeInNormalWords=date("Y-m-d H:i:s",$timeInSeconds);

?>
<br>
<?php echo " time should be "; echo $timeInNormalWords;


?><br>
<br>
<br>
<?php
echo $uservalues['defender'];
echo date("Y-m-d H:i:s",13665);
?>
</section>
