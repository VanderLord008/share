<?php include("connection.php");
include("login_register.php");
echo "$_POST[email]";
 ?>
this is the army page



<?php
if(isset($_SESSION['email']))
{
    
    $emil=$_SESSION['email'];

    echo"<h1> welcome $emil</h1>";
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {
            echo"<h1> welcome $_SESSION[username]</h1>";
            echo"<h1> welcome $emil</h1>";
           
    


}

}
?>
