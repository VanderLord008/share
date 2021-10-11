<?php
include("connection.php");
include("header.php");
include("data.php");


?>
username = <?php echo $user_data['username'] ?>
<br>
email = <?php echo $user_data['email'] ?>
<br>
verified = <?php echo $user_data['verified'] ?>
<br>


army = <?php echo $user_forces['army'] ?>
<br>
navy = <?php echo $user_forces['navy'] ?>
<br>
airforce = <?php echo $user_forces['airforce'] ?>
<br>


healthcare = <?php echo $user_budget['healthcare'] ?>
<br>
welfare = <?php echo $user_budget['welfare'] ?>
<br>
military = <?php echo $user_budget['military'] ?>
<br>
research = <?php echo $user_budget['research'] ?>
<br>



state1 = <?php echo $user_states['state1'] ?>
<br>

population = <?php echo $user_stats['population'] ?>
<br>
government = <?php echo $user_stats['government'] ?>
<br>
economic_policy = <?php echo $user_stats['economic_policy'] ?>
<br>
corruption = <?php echo $user_stats['corruption'] ?>
<br>
happiness = <?php echo $user_stats['happiness'] ?>
<br>
popularity = <?php echo $user_stats['popularity'] ?>
<br>
money = <?php echo $user_stats['money'] ?>
<br>