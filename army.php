<?php
include("connection.php");
include("header.php");
include("data.php");


?>
<p>this is the army page</p>
<p>you are new so not all things are unlocked for you which will unlock as you progress through the story for now you can make soldiers</p>
<br>
<p>cost of creating one soldier is 1000</p>
<br>
your current soldiers are <?php echo $user_forces['army'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<button onclick="window.location.href='taxes.php'">Continue</button>
<form method="POST" action="functions.php">
<input type="number" min="1" max="100000000000" placeholder="enter the soldiers" name="soldiers" >

                <button type="submit" class="createsoldiersbtm" name="createsoldiers">create soldiers</button>


                