<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statecreater</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("connection.php");
include("header.php");
include("data.php");

?>


<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    include("data.php");
?>

<section class="home-section">
<h2>here you can create three of your many states</h2>
<br>

<form method="POST" action="functions.php">
    <?php
        if($user_states['statecounter']=='0')
        {
?>
            create your first state here 
            name it here
                        
                        <input type="text" placeholder="first state name" name="first" >
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                    all the buildings will come here
        
                    ??
                    ??
                    ??
                    ??
        <div class="savestatebtn">
                    <button type="submit" class="save_statebtn" name="save_first_state">submit</button>
                    </div>
                    </form>
                </body>
            
<?php
        }
    else if($user_states['statecounter']==1)
    {
        ?>
        click here to create your second state in your state




        <?php
    }
    
    else if($user_states['statecounter']==2)
    {
        ?>
        click here to create your third state in your state




        <?php
    }

    else if($user_states['statecounter']==3)
    {
        ?>
        click here to create your fourth state in your state




        <?php
    }
    else if($user_states['statecounter']==4)
    {
        ?>
        click here to create your fifth state in your state




        <?php
    }

    else if($user_states['statecounter']==5)
    {
        ?>
        click here to create your sixth state in your state




        <?php
    }

    else if($user_states['statecounter']=='6')
    {
        ?>
        click here to create a new in your state
        <form method="POST" action="functions.php">                        
                        <input type="text" placeholder="input state name" name="newstate" >
                     <br>
        <div class="savestatebtn">
                    <button type="submit" class="save_statebtn" name="save_new_state">submit</button>
                    </div>
                    </form>




        <?php
    }












    ?>
   

<?php

}
else
 {
?>
<?php 
echo "log in first to see this page";

}
?>
</section>