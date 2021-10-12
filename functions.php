<?php
include("connection.php");
require('login_register.php');
include("data.php");


if(isset($_POST['Asia']))
{   $con=new mysqli("localhost","root","","test");
    $query="UPDATE `stats` SET `continent`='Asia' WHERE `username`='$_SESSION[username]'";
        if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('continent selected sucessfully');
                window.location.href='economy_type.php';
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
                window.location.href='economy_type.php';
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
                window.location.href='economy_type.php';
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
                window.location.href='economy_type.php';
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
                window.location.href='economy_type.php';
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
                window.location.href='economy_type.php';
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
                window.location.href='economy_type.php';
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
                    alert('please make sure the sum is 100%');
                    window.location.href='budget.php';
                    </script>
                    ";
                }
} 


if(isset($_POST['createsoldiers']))
{   $con=new mysqli("localhost","root","","test");
    $soldiers_limit= ((5*$user_stats['population'])/100)-($number_of_wars*10000);
    
    $soldiers=$_POST['soldiers'];
    $money_needed= (1000*$soldiers);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'] && $soldiers<$soldiers_limit)
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_soldiers= $user_forces['soldiers']+$soldiers;
        $query="UPDATE `forces` SET `soldiers`='$new_soldiers' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('soldiers saved sucessfully');
            window.location.href='army.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createartillery']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $artillery=$_POST['artillery'];
    $money_needed= (10000*$artillery);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_artillery= $user_forces['artillery']+$artillery;
        $query="UPDATE `forces` SET `artillery`='$new_artillery' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('artillery saved sucessfully');
            window.location.href='army.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createvehicles']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $vehicles=$_POST['vehicles'];
    $money_needed= (20000*$vehicles);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_vehicles= $user_forces['vehicles']+$vehicles;
        $query="UPDATE `forces` SET `vehicles`='$new_vehicles' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('vehicles saved sucessfully');
            window.location.href='army.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 


if(isset($_POST['createweapons']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $weapons=$_POST['weapons'];
    $money_needed= (500*$weapons);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_weapons= $user_forces['weapons']+$weapons;
        $query="UPDATE `forces` SET `weapons`='$new_weapons' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('weapons saved sucessfully');
            window.location.href='army.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createships']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $ships=$_POST['ships'];
    $money_needed= (1000*$ships);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_ships= $user_forces['ships']+$ships;
        $query="UPDATE `forces` SET `ships`='$new_ships' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('ships saved sucessfully');
            window.location.href='navy.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createdestroyers']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $destroyers=$_POST['destroyers'];
    $money_needed= (1000*$destroyers);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_destroyers= $user_forces['destroyers']+$destroyers;
        $query="UPDATE `forces` SET `destroyers`='$new_destroyers' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('destroyers saved sucessfully');
            window.location.href='navy.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createsubmarines']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $submarines=$_POST['submarines'];
    $money_needed= (1000*$submarines);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_submarines= $user_forces['submarines']+$submarines;
        $query="UPDATE `forces` SET `submarines`='$new_submarines' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('submarines saved sucessfully');
            window.location.href='navy.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createcarriers']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $carriers=$_POST['carriers'];
    $money_needed= (1000*$carriers);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_carriers= $user_forces['carriers']+$carriers;
        $query="UPDATE `forces` SET `carriers`='$new_carriers' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('carriers saved sucessfully');
            window.location.href='navy.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createplanes']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $planes=$_POST['planes'];
    $money_needed= (1000*$planes);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_planes= $user_forces['planes']+$planes;
        $query="UPDATE `forces` SET `planes`='$new_planes' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('planes saved sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createhelicopters']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $helicopters=$_POST['helicopters'];
    $money_needed= (1000*$helicopters);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_helicopters= $user_forces['helicopters']+$helicopters;
        $query="UPDATE `forces` SET `helicopters`='$new_helicopters' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('helicopters saved sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createbombers']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $bombers=$_POST['bombers'];
    $money_needed= (1000*$bombers);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_bombers= $user_forces['bombers']+$bombers;
        $query="UPDATE `forces` SET `bombers`='$new_bombers' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('bombers saved sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createmissiles']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $missiles=$_POST['missiles'];
    $money_needed= (1000*$missiles);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_missiles= $user_forces['missiles']+$missiles;
        $query="UPDATE `forces` SET `missiles`='$new_missiles' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('missiles saved sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createpropagandists']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $propagandists=$_POST['propagandists'];
    $money_needed= (1000*$propagandists);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_propagandists= $user_forces['propagandists']+$propagandists;
        $query="UPDATE `forces` SET `propagandists`='$new_propagandists' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('propagandists saved sucessfully');
            window.location.href='internal_forces.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createpolice']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $police=$_POST['police'];
    $money_needed= (1000*$police);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_police= $user_forces['police']+$police;
        $query="UPDATE `forces` SET `police`='$new_police' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('police saved sucessfully');
            window.location.href='internal_forces.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 

if(isset($_POST['createspies']))
{   $con=new mysqli("localhost","root","","test");
    
    
    $spies=$_POST['spies'];
    $money_needed= (1000*$spies);

    if($money_needed>$user_stats['money'])
    {
        echo"
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
    }
    elseif($money_needed<=$user_stats['money'])
    {
        $money_left=$user_stats['money']-$money_needed;
        $q2="UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
        $new_spies= $user_forces['spies']+$spies;
        $query="UPDATE `forces` SET `spies`='$new_spies' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con,$query);
        mysqli_query($con,$q2);
            echo"
            <script>
            alert('spies saved sucessfully');
            window.location.href='internal_forces.php';
            </script>
            ";
    }
    else{
        echo"
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
    }
  
} 











?>



