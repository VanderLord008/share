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

<p>here you distribute your budget</p>




<form method="POST" action="functions.php">
                
<input type="text" placeholder="healthcare" name="healthcare" >
<input type="text" placeholder="welfare" name="welfare" >
<input type="text" placeholder="military" name="military" >
<input type="text" placeholder="research" name="research" >
                
                
                <button type="submit" class="budget" name="budget">save</button>
            </form>


<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>

</section>