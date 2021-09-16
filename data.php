<?php




$user_get_data="SELECT * FROM `registered_user` WHERE `username`='$_SESSION[username]'";
$user_get_data_result=mysqli_query($con,$user_get_data);
$user_data=mysqli_fetch_assoc($user_get_data_result);


$user_get_forces="SELECT * FROM `forces` WHERE `username`='$_SESSION[username]'";
$user_get_forces_result=mysqli_query($con,$user_get_forces);
$user_forces=mysqli_fetch_assoc($user_get_forces_result);



?>