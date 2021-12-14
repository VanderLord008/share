<?php




$user_get_data="SELECT * FROM `registered_user` WHERE `username`='$_SESSION[username]'";
$user_get_data_result=mysqli_query($con,$user_get_data);
$user_data=mysqli_fetch_assoc($user_get_data_result);


$user_get_forces="SELECT * FROM `forces` WHERE `username`='$_SESSION[username]'";
$user_get_forces_result=mysqli_query($con,$user_get_forces);
$user_forces=mysqli_fetch_assoc($user_get_forces_result);

$user_get_budget="SELECT * FROM `budget` WHERE `username`='$_SESSION[username]'";
$user_get_budget_result=mysqli_query($con,$user_get_budget);
$user_budget=mysqli_fetch_assoc($user_get_budget_result);

$user_get_states="SELECT * FROM `states` WHERE `username`='$_SESSION[username]'";
$user_get_states_result=mysqli_query($con,$user_get_states);
$user_states=mysqli_fetch_assoc($user_get_states_result);

$user_get_stats="SELECT * FROM `stats` WHERE `username`='$_SESSION[username]'";
$user_get_stats_result=mysqli_query($con,$user_get_stats);
$user_stats=mysqli_fetch_assoc($user_get_stats_result);

$user_get_conflicts="SELECT * FROM `stats` WHERE `username`='$_SESSION[username]'";
$user_get_conflicts_result=mysqli_query($con,$user_get_conflicts);
$user_conflicts=mysqli_fetch_assoc($user_get_conflicts_result);


?>