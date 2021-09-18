
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("header.php");
include("connection.php");
?>          

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
                    <button type="reset"  onclick="popup('register popup')">X</button>
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

    <div class="Color-Economy">
				<p>Economy will be green.</p>
	</div>
    <div class="Color-Military">
				<p>Military will be blue.</p>
	</div>
    <div class="Color-City">
				<p>Nation/city buiding will be purple.</p>
	</div>
    <div class="Color-Alliance">
				<p>Alliance will be dark orange.</p>
	</div>
<?php
        if(isset($_SESSION['logged_in']))
        {
            echo"<h1> welcome $_SESSION[username]</h1>";
        }
        ?>


<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
?>
<p>Choose your government type</p>
<form method="POST" action="functions.php">
                
                <button type="submit" class="loginbtn" name="democracy">democracy</button>
                <button type="submit" class="loginbtn" name="dictator">dictator</button>


            </form> 
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
