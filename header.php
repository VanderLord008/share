
<header>
<link rel="stylesheet" type="text/css" href="//www.1001fonts.com/format-1452-font.html"/>

        <h2>Democracy to Dictatorship</h2>
        
        <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo"
                <div class='user'>
                $_SESSION[username] - <a href='logout.php'>logout</a>
                </div>
                ";
            }
        else
        {
            echo"
            <div class='signin'>
            <button type='button' onclick=\"popup('login popup')\">login</button>
            <button type='button' onclick=\"popup('register popup')\">register</button>
            </div>
            ";
        }
            ?>
       
    </header>