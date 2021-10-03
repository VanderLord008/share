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
    

<h2>here you can create three of your many states</h2>
<br>

<form method="POST" action="functions.php">
                
                <input type="text" placeholder="first state name" name="first">
                <br>
                <br>
                <input type="text" placeholder="second state name" name="second">
                <br>
                <br>
                <input type="text" placeholder="third state name" name="third">
                
                
            


            <button type="submit" class="save_statebtn" name="submit">submit</button>
            </form>
</body>
</html>