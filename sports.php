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
games that are in this game
<br>
Soccer
<br>
cricket
<br>
hockey
<br>
baseball
<br>
tennis


<br>

        hosting a sports tournament will increse the happiness of the people depending on how fearful they are of you<br>
        you can host a soccer game every two months <br>
        the amount of money it costs to host a game depends on how corrupt your country officials are <br>
        it will also generate income depending on the happiness level of people if people are happier they are more likely to come see a match <br>
        <br>
        <form method="POST" action="functions.php">
        <button type="submit" class="host_soccer_btn" name="host_soccer">host a soccer tournament</button> <br>

        <form method="POST" action="functions.php">
        <button type="submit" class="host_cricket_btn" name="host_cricket">host a cricket tournament</button> <br>

        <form method="POST" action="functions.php">
        <button type="submit" class="host_hockey_btn" name="host_hockey">host a hockey tournament</button> <br>

        <form method="POST" action="functions.php">
        <button type="submit" class="host_baseball_btn" name="host_baseball">host a baseball tournament</button> <br>

        <form method="POST" action="functions.php">
        <button type="submit" class="host_tennis_btn" name="host_tennis">host a tennis tournament</button> <br>
























</section>