<?php
include("connection.php");
require('login_register.php');



if(isset($_POST['democracy']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `forces` SET `army`='10',`navy`='10',`airforce`='10' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('army updated');
                window.location.href='manage_army.php';
                </script>
                ";
            }
            else{
                echo"
                <script>
                alert('error');
                window.location.href='index.php';
                </script>
                ";
            }
        }
?>

<?php
if(isset($_POST['dictatorship']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `forces` SET `army`='20',`navy`='20',`airforce`='20' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('army updated');
                window.location.href='manage_army.php';
                </script>
                ";
            }
            else{
                echo"
                <script>
                alert('error');
                window.location.href='index.php';
                </script>
                ";
            }
        }
        ?>

<?php
if(isset($_POST['autocracy']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `forces` SET `army`='20',`navy`='20',`airforce`='20' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('army updated');
                window.location.href='manage_army.php';
                </script>
                ";
            }
            else{
                echo"
                <script>
                alert('error');
                window.location.href='index.php';
                </script>
                ";
            }
        }
        ?>


<?php
if(isset($_POST['increase_army']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `forces` SET `army`='$_POST[increase_army]',`navy`='$_POST[increase_army]',`airforce`='$_POST[increase_army]' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('army updated');
                window.location.href='manage_army.php';
                </script>
                ";
            }
            else{
                echo"
                <script>
                alert('error');
                window.location.href='index.php';
                </script>
                ";
            }
        }
?>