<?php
include("connection.php");
include("header.php");
include("data.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
?>

<section class="home-section">

<div class="continent_choice">

<h2>here you can choose what continent you want to start in</h2>    

<div class="Asia">
    <p>this is the dictator Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="Asiabtn" name="Asia">Asia</button>
              



<div class="Antartica">
    <p>this is the dictator Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="Antarticabtn" name="Antartica">Antartica</button>

<div class="Africa">
    <p>this is the dictator Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                

                <button type="submit" class="Africabtn" name="Africa">Africa</button>

</div>

<div class="Australia">
    <p>this is the dictator Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="Australiabtn" name="Australia">Australia</button>
        
<div class="Europe">
    <p>this is the dictator Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="Europebtn" name="Europe">Europe</button>

<div class="North America">
    <p>this is the dictator Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="North Americabtn" name="North_America">North America</button>


<div class="South America">
    <p>this is the dictator Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="South Americabtn" name="South_America">South America</button>

<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>

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
</section>

</body>
</html>











