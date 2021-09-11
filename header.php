<?php require('connection.php');
?>
<header>
        <h2>PnWtest</h2>
        <nav>
            <a href="#">home</a>
            <a href="#">blog</a>
            <a href="#">contact</a>
            <a href="#">about</a>
        </nav>
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