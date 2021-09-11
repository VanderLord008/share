<?php
include("connection.php");
require('login_register.php');


if(isset($_SESSION['email']))
{
    
    $emil=$_SESSION['email'];

    echo"<h1> welcome $emil</h1>";

}


function democracystats()
{
    $con=new mysqli("localhost","root","","test");

    $query="INSERT INTO `forces`(`army`, `navy`, `airforce`) VALUES ('10','10','10') WHERE `email`='$_GET[emil]'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo"successful";
    }
    else
    {
        echo"unsuccessful";
    }
}
function dictatorstats()
{
    $query="INSERT INTO `forces`(`army`, `navy`, `airforce`) VALUES ('100','100','100') WHERE `email`=='$_SESSION[email]'";
    $con=new mysqli("localhost","root","","test");

    $result=mysqli_query($con,$query);
    if($result)
    {
        echo"successful";
    }
    else
    {
        echo"unsuccessful";
    }
}

?>