<?php
include("connection.php");
include("header.php");
include("data.php");

?>
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>please verify email</title>
</head>
<body>
<section class="home-section">
<?php
if($_SESSION['verified']==0) {
    echo"<h1> verify email first</h1>";}

 
 if($_SESSION['verified']==1) {
    header("location:index.php");}
?>
</section>       


</body>
</html>