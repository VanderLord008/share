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

<?php echo $_SESSION['username'] ?>'s stuff <br>
soldiers = <?php echo $user_forces['soldiers'] ?>
<br>
artillery = <?php echo $user_forces['artillery'] ?>
<br>
armoured vehicles = <?php echo $user_forces['vehicles'] ?>
<br>

to put something to sell fill it below
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the soldiers" name="soldier_sell_number" >
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the price" name="soldier_sell_price" >

                <button type="submit" class="sellsoldiersbtm" name="sell_soldiers">sell soldiers</button>
</form>
</form>
<br>
want something to buy? fill it below
<br>

<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the soldiers" name="soldier_buy_number" >
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="enter the price" name="soldier_buy_price" >

                <button type="submit" class="buysoldiersbtm" name="buy_soldiers">buy soldiers</button>
</form>
</form>
</section>