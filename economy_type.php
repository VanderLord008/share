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
<p>hello <?php echo $_SESSION['username'] ?> here you can select which type of economic system you want to have.</p>
<div class="capitalism">
    <p>this is the capitalism option Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                

                <button type="submit" class="capitalismbtm" name="capitalism">capitalism</button>

</div>
<form method="POST" action="functions.php">
                

                <button type="submit" class="socialismbtm" name="socialism">socialism</button>

</div>
<form method="POST" action="functions.php">
                

                <button type="submit" class="communismbtm" name="communism">communism</button>

</div>
</section>