<?php
include("connection.php");
include("header.php");
include("data.php");


?>
<link rel="stylesheet" href="style.css">
<style>
*{
    background-color: white;
}
</style>

<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
?>



<div class="democracychoice">

    <p>as a new player you can only have dictatorship type og govt as you progress through the game you will unlock all others different types</p>
    <button onclick="window.location.href = 'economy_type.php';">click here to select which continent you want to start in</button>




<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>