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
                 iron mines <br>
                 you have <?php echo $user_states['state'.$statenumber.'ironmines'];
                 
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