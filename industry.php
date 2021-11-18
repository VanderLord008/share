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



<p>this is the industry page. not sure what it will be in actuality but for now i will placeholders for this page and implement the backend. we can change the names later</p>
<br>
<br>
<br>
<br>
farm
<br>
<br>
<p>cost of creating one farm is 1000</p>
<br>
your current farms are <?php echo $user_stats['farms'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="create a farm" name="farm" >

                <button type="submit" class="createfarmbtm" name="createfarm">create farm</button>

                <br>


<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>

</section>