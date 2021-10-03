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


if(isset($_POST['submit']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `states` SET `state1`='$_POST[first]',`state2`='$_POST[second]',`state3`='$_POST[third]' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('state saved sucessfully');
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