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
            echo "not your fault for this behaviour";
        }
        else
        {
            $s_user=mysqli_fetch_assoc($user_check);
            $stats_stats=mysqli_query($con,"SELECT * FROM `registered_user` WHERE `username`='$un'");
            $s_stats=mysqli_fetch_assoc($stats_stats);
            $stats_rank=mysqli_query($con,"SELECT * FROM `stats` WHERE `username`='$un'");
            $s_rank=mysqli_fetch_assoc($stats_rank);
            echo $s_user['username'];
            echo $s_rank['money'];
        }
    }
}
?>
</section>