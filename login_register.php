<?php
require('connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

function sendMail($email,$vcode)
{
    require ("PHPMailer\PHPMailer.php");
    require ("PHPMailer\SMTP.php");
    require ("PHPMailer\Exception.php");
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'pnwteamfortest@gmail.com';                     //SMTP username
        $mail->Password   = 'vaibhab2';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('pnwteamfortest@gmail.com', 'pnwtest');
        $mail->addAddress($email);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email verification';
        $mail->Body    = "Thanks for registration
        click the link below to verify your account
        <a href='http://localhost:8012/pnwtest/verify.php?email=$email&vcode=$vcode'>Verify</a>";
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}



if(isset($_POST['login']))
{
    $query="SELECT * FROM `registered_user` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
          $result_fetch=mysqli_fetch_assoc($result);
          if(password_verify($_POST['password'],$result_fetch['password']))
          {
            $_SESSION['logged_in']=true;
            $_SESSION['username']=$result_fetch['username'];
            $_SESSION['verified']=$result_fetch['verified'];
            
            header("location:verifyemail.php");
          }
          else
          {
            echo"
            <script>
            alert('incorrect password');
            window.location.href='index.php';
            </script>
            ";
          }
        }
        else
        {
            echo"
        <script>
        alert('email or username not registered');
        window.location.href='index.php';
        </script>
        ";
        }
    }
    else{
        echo"
        <script>
        alert('cannot run dquery');
        window.location.href='index.php';
        </script>
        ";
    }
}
if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `registered_user` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            
            if($result_fetch['username']==$_POST['username'])
           { echo"
            <script>
            alert('$result_fetch[username] - username already taken');
            window.location.href='index.php';
            </script>
            ";
            }
        else
        {
            echo"
            <script>
                alert('$result_fetch[email] - email is already in use');
                window.location.href='index.php';
            </script>
            ";
        }
    }
    else
        {
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $vcode=bin2hex(random_bytes(16));
            $username=test_input($_POST['username']);
            $email=test_input($_POST['email']);
            $query="INSERT INTO `registered_user`(`username`, `email`, `password`, `verification_code`, `verified`) VALUES ('$username','$email','$password','$vcode','0')";
            $q2=mysqli_query($con,"INSERT INTO `forces`(`email`, `username`, `soldiersLevelOne`, `artilleryLevelOne`, `vehiclesLevelOne`, `weaponsLevelOne`, `shipsLevelOne`, `destroyersLevelOne`, `submarinesLevelOne`, `carriersLevelOne`, `planesLevelOne`, `helicoptersLevelOne`, `bombersLevelOne`, `missiles`, `spies`, `police`, `propagandists`) VALUES ('$email','$username','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')");
            $q3=mysqli_query($con,"INSERT INTO `stats`(`username`, `email`, `population`, `government` ,`corruption`,`happiness`,`popularity`,`money`) VALUES ('$username','$email','10000000','dictatorship','3','80','90','5000000')");
            $q4=mysqli_query($con,"INSERT INTO `states`(`username`, `email`) VALUES ('$username','$email')");
            $q5=mysqli_query($con,"INSERT INTO `budget`(`username`, `email`) VALUES ('$username','$email')");
            if(mysqli_query($con,$query) && sendMail($email,$vcode))
            {
                echo"
                <script>
                
                window.location.href='index.php';
                </script>
                ";
            }
            else{
                echo"
                <script>
                alert('server down');
                window.location.href='index.php';
                </script>
                ";
            }
        }
    }
    else
    {
        echo"
        <script>
        alert('cannot run query');
        window.location.href='index.php';
        </script>
        ";
    }

}

?>
