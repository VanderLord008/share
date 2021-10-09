<?php
include("connection.php");
require('login_register.php');



if(isset($_POST['Asia']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `continent`='Asia' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('continent selected sucessfully');
                window.location.href='state_creator.php';
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

if(isset($_POST['Antartica']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `continent`='Antartica' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('continent selected sucessfully');
                window.location.href='state_creator.php';
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

if(isset($_POST['Africa']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `continent`='Africa' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('continent selected sucessfully');
                window.location.href='state_creator.php';
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

if(isset($_POST['Australia']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `continent`='Australia' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('continent selected sucessfully');
                window.location.href='state_creator.php';
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

if(isset($_POST['Europe']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `continent`='Europe' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('continent selected sucessfully');
                window.location.href='state_creator.php';
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

if(isset($_POST['North_America']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `continent`='North America' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('continent selected sucessfully');
                window.location.href='state_creator.php';
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

if(isset($_POST['South_America']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `continent`='South America' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('continent selected sucessfully');
                window.location.href='state_creator.php';
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


if(isset($_POST['save_first_state']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `states` SET `state1`='$_POST[first]' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('state saved sucessfully');
                window.location.href='budget.php';
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


if(isset($_POST['capitalism']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `economic_policy`='capitalism' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('economic policy  selected sucessfully');
                window.location.href='state_creator.php';
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
if(isset($_POST['socialism']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `economic_policy`='socialism' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('economic policy  selected sucessfully');
                window.location.href='state_creator.php';
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
if(isset($_POST['communism']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `economic_policy`='communism' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('economic policy  selected sucessfully');
                window.location.href='state_creator.php';
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

if(isset($_POST['budget']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `budget` SET `healthcare`='$_POST[healthcare]',`welfare`='$_POST[welfare]',`military`='$_POST[military]',`research`='$_POST[research]' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query) && ($_POST['healthcare'] + $_POST['welfare']+$_POST['military']+$_POST['research']==100)) 
            {
                echo"
                <script>
                alert('budget saved sucessfully');
                window.location.href='army.php';
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



?>