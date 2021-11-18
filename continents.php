<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include("connection.php");
include("header.php");


?>
<body>
    





<section class="home-section">
    
<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    include("data.php");
?>

<div class="continent_choice">

<h2>Please choose the continent where your nation will be located.</h2>
<p>Hover over each continent to see what resources and industry are available.  You cannot change continents once you have submitted your choice.</P>

<img src="../images/continents.png" alt="Map of the world" width=100%>


<div class="Australia">

<form method="POST" action="functions.php">
                
             
                <button type="submit" class="australiabtn" name="Australia">Australia</button>

<div class="Asia">


    
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="asiabtn" name="Asia">Asia</button>
              



<div class="Africa">

<form method="POST" action="functions.php">
                

                <button type="submit" class="africabtn" name="Africa">Africa</button>

</div>


        
<div class="Europe">

<form method="POST" action="functions.php">
                
             
                <button type="submit" class="europebtn" name="Europe">Europe</button>

<div class="North America">

<form method="POST" action="functions.php">
                
             
                <button type="submit" class="namericabtn" name="North_America">North America</button>


<div class="South America">

<form method="POST" action="functions.php">
                
             
                <button type="submit" class="samericabtn" name="South_America">South America</button>



</form>
</div>
</form>
</div>
</form>
</div>
</form>
</div>
</form>
</div>
</form>
</div>
</div>


<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>



</section>

</body>
</html>











