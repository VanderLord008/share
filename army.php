<?php
include("connection.php");
include("header.php");
include("data.php");


?>
<p>this is the army page</p>
<p>you are new so not all things are unlocked for you which will unlock as you progress through the story for now you can make soldiers</p>
<button onclick="window.location.href='taxes.php'">Continue</button>
<form method="POST" action="functions.php">
<input type="number" min="1" max="100" placeholder="enter the soldiers" name="soldiers" >

                <button type="submit" class="createsoldiersbtm" name="createsoldiers">create soldiers</button>


                