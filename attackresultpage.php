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

this is the page which shows the result of the attack you just did.
<br>


<?php
echo 'you have destroyed ';echo $_GET['username'];echo "'s ";echo $_GET['loss'];echo " things";








} else {
?>
<?php 
echo "log in first to see this page";

}
?>




</section>