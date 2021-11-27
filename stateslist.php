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
    $result = mysqli_query($con,"select `state1` FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
    ?>state1 = <?php echo $result_fetch['state1'];
    }
    ?><br><?php
    $result = mysqli_query($con,"select `state2` FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        ?>state2 = <?php echo $result_fetch['state2'];
    }
    ?><br><?php
    $result = mysqli_query($con,"select `state3` FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        ?>state3 = <?php echo $result_fetch['state3'];
    }
    ?>
    
    
    
    <br>
    <?php
    $result = mysqli_query($con,"select `state4` FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        $number=4;
    }?>state4
    <form method="POST" action="statepage.php?state">
  <input type="hidden" name="state" value="<?php $result_fetch['state4'] ?>" /> 
  <a onclick="this.parentNode.submit();"> <?php echo $result_fetch['state4'] ?></a>
</form>
    
    
    
    
    
    <br><?php
    $result = mysqli_query($con,"select `state5` FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        ?>state5 = <?php echo $result_fetch['state5'];
    }
    ?><br><?php
    $result = mysqli_query($con,"select `state6` FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        ?>state6 = <?php  echo $result_fetch['state6'];
    }
    ?><br><?php
    $result = mysqli_query($con,"select `state7` FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        ?>state7 = <?php echo $result_fetch['state7'];
    }
    ?><br><?php
    $result = mysqli_query($con,"select `state8` FROM `states` where `username`='$_SESSION[username]'");
    if($result)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        ?>state8 = <?php echo $result_fetch['state8'];
    }

?>

</html>