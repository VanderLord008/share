<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statelist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("connection.php");
include("header.php");
include("data.php");

?>
<section class="home-section">

    <p>here you can see all your states</p>
    <?php
    
   
    ?><br><?php
    $result = mysqli_query($con,"select * FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        for($i=1;$i<=$result_fetch['statecounter'];$i++)
        {
            ?>
            state<?php echo $i ?> = <a href="statepage.php?stateid=<?php echo $result_fetch['state'.$i.'id']; ?>"><?php echo $result_fetch['state'.$i] ?></a>
           <br> <?php
        }
    }
    ?>
</section>
</body>
</html>