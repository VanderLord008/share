<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statepage</title>
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


if(!isset($_SESSION['username'])){
    echo "you must be logged in to see this page";
}
else if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    include("data.php");
?>

this is the page to see each state the user have. <br>
<?php
if(!isset($_SESSION['username'])){
    echo "you must be logged in to see this page";
}
else
{
    if(!isset($_GET['state']))
    {
        echo "incorrect way to see this";
    }
    else
    {
        $un=$_GET['state'];
        $statenumber=0;
        $check="SELECT * FROM `states` WHERE `username` = '$_SESSION[username]' AND (`state1`='$_GET[state]' OR `state2`='$_GET[state]' OR `state3`='$_GET[state]' )";
        $state_check=mysqli_query($con,$check);
        if(mysqli_num_rows($state_check)>0)
        {
            if($un==$user_states['state1'])
            {
                $statenumber=1;
            }
            else if($un==$user_states['state2'])
            {
                $statenumber=2;
            }
            else if($un==$user_states['state3'])
            {
                $statenumber=3;
            }
                 echo "this is  $un";
                 ?>
                 <br><br>
                iron mines <br>
                 you have <?php echo $user_states['state'.$statenumber.'ironmines']; echo " iron mines";
                 ?>
                 <br>
                do you want to build more? if so <br>

                 your current money is <?php echo $user_stats['money'] ?>
                 <br>
                 and your current state number is <?php echo $statenumber?>
                 <form method="POST" action="functions.php">
                 <input type="number" min="-10000000000000" max="100000000000" placeholder="build an iron mine" name="ironmines" >
                 
                 <input type="hidden" name="statenum" value="<?php echo $statenumber?>">
                 <input type="hidden" name="statename" value="<?php echo $un?>">
                                 <button type="submit" class="createironminebtm" name="createironmine">build the mine</button>
                 
                                 <br>
                 </form>


<br>

                 farms <br>
                 you have <?php echo $user_states['state'.$statenumber.'farms']; echo " farms";
                 ?>
                 <br>
                do you want to build more? if so <br>

                 your current money is <?php echo $user_stats['money'] ?>
                 <br>
                 and your current state number is <?php echo $statenumber?>
                 <form method="POST" action="functions.php">
                 <input type="number" min="-10000000000000" max="100000000000" placeholder="build a farm" name="farms" >
                 
                 <input type="hidden" name="statenum" value="<?php echo $statenumber?>">
                 <input type="hidden" name="statename" value="<?php echo $un?>">
                                 <button type="submit" class="createfarmbtm" name="createfarms">build the farms</button>
                 
                                 <br>
                 </form>



<br>
                 bauxite mines <br>
                 you have <?php echo $user_states['state'.$statenumber.'bauxitemines']; echo " bauxite mines";
                 ?>
                 <br>
                do you want to build more? if so <br>

                 your current money is <?php echo $user_stats['money'] ?>
                 <br>
                 and your current state number is <?php echo $statenumber?>
                 <form method="POST" action="functions.php">
                 <input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxitemines" >
                 
                 <input type="hidden" name="statenum" value="<?php echo $statenumber?>">
                 <input type="hidden" name="statename" value="<?php echo $un?>">
                                 <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>
                 
                                 <br>
                 </form>

 <br>
 <br>
 uranium mines <br>
                 you have <?php echo $user_states['state'.$statenumber.'uraniummines']; echo " uranium mines";
                 ?>
                 <br>
                do you want to build more? if so <br>

                 your current money is <?php echo $user_stats['money'] ?>
                 <br>
                 and your current state number is <?php echo $statenumber?>
                 <form method="POST" action="functions.php">
                 <input type="number" min="-10000000000000" max="100000000000" placeholder="build a uranium mine" name="uraniummines" >
                 
                 <input type="hidden" name="statenum" value="<?php echo $statenumber?>">
                 <input type="hidden" name="statename" value="<?php echo $un?>">
                                 <button type="submit" class="createuraniumminebtm" name="createuraniummine">build the mine</button>
                 
                                 <br>
                 </form>

                 <br>
 <br>
 coal mines <br>
                 you have <?php echo $user_states['state'.$statenumber.'coalmines']; echo " coal mines";
                 ?>
                 <br>
                do you want to build more? if so <br>

                 your current money is <?php echo $user_stats['money'] ?>
                 <br>
                 and your current state number is <?php echo $statenumber?>
                 <form method="POST" action="functions.php">
                 <input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coalmines" >
                 
                 <input type="hidden" name="statenum" value="<?php echo $statenumber?>">
                 <input type="hidden" name="statename" value="<?php echo $un?>">
                                 <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>
                 
                                 <br>
                 </form>

                 <br>
 <br>
 oil_and_natural_gas_ mines <br>
                 you have <?php echo $user_states['state'.$statenumber.'oil_and_natural_gas_mines']; echo " oil and natural gas mines";
                 ?>
                 <br>
                do you want to build more? if so <br>

                 your current money is <?php echo $user_stats['money'] ?>
                 <br>
                 and your current state number is <?php echo $statenumber?>
                 <form method="POST" action="functions.php">
                 <input type="number" min="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil_and_natural_gas_mines" >
                 
                 <input type="hidden" name="statenum" value="<?php echo $statenumber?>">
                 <input type="hidden" name="statename" value="<?php echo $un?>">
                                 <button type="submit" class="createoil_and_natural_gas_minebtm" name="createoil_and_natural_gas_mine">build the mine</button>
                 
                                 <br>
                 </form>





                 <?php
        }
        
        else
        {
            echo "this page gives an error";
        }
    }



} 
}

?>





</section>