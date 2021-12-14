<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conflicts</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("connection.php");
    include("header.php");
    include("data.php");

    ?>
    <section class="home-section">

    <?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    include("data.php");
?>

<?php

$user_defending_conflicts="SELECT * FROM `conflicts` WHERE `defender`='$_SESSION[username]'";
$p = mysqli_query($con, $user_defending_conflicts);
        while ($row = mysqli_fetch_assoc($p)) {
?>
attacker=<?php echo $row['attacker'];?>
<br>
<?php
        }
        ?>




<?php

} else {
?>
<?php 
echo "log in first to see this page";

}
?>

       


    </section>