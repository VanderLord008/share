<?php 
include("connection.php");
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-image: url('../../images/bg.png');     
            background-repeat: no-repeat;
            background-size:     cover;    
            
            
        }
    </style>
</head>
<body>
<div class="landing">

<div class="title">
    Democracy To Dictatorship
</div>

<div class="signin">

            <button type="button" onclick="popup('login popup')">login</button>
            <button type="button" onclick="popup('register popup')">register</button>
            
</div>
</div>


<div class="popup-container" id="login popup">
        <div class="popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>user login</span>
                    <button style="cursor: pointer;" type="reset"  onclick="popup('login popup')">X</button>
                </h2>
                <input type="text" placeholder="email or username" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="loginbtn" name="login">login</button>
            </form>
            <div class="forgotbtn">
                <button type="button" onclick="forgotpopup()">Forgot Password?</button>
            </div>
        </div>
    </div>

    <div class="popup-container" id="register popup">
        <div class="register popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>user register</span>
                    <button style="cursor: pointer;" type="reset"  onclick="popup('register popup')">X</button>
                </h2>
                <input type="text" placeholder="username" name="username">
                <input type="email" placeholder="email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="registerbtn" name="register">register</button>
            </form>
        </div>
    </div>

    
    <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form method="POST" action="forgotpassword.php">
                <h2>
                    <span>reset password</span>
                    <button style="cursor: pointer;" type="reset"  onclick="popup('forgot-popup')">X</button>
                </h2>
                <input type="text" placeholder="email" name="email">
                <button type="submit" class="resetbtn" name="send-reset">send link</button>
            </form>
        
        </div>
    </div>

    
<?php
        if(isset($_SESSION['logged_in']))
        {
            echo"<h1> welcome $_SESSION[username]</h1>";
            
        }
        ?>


<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    header("location:govt_type.php");
?>
 
            
<?php
} else {
?>
<?php
}
?>




<script>
        function popup(popup_name)
        {
           get_popup=document.getElementById(popup_name);
           if (get_popup.style.display=="flex")
           {
            get_popup.style.display="none";
           }
           else{
            get_popup.style.display="flex"
           }
        }

        function forgotpopup()
        {
            document.getElementById('login popup').style.display="none"; 
            document.getElementById('forgot-popup').style.display="flex";
        }
</script>


</body>
</html>