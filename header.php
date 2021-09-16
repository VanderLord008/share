
<header>
<link rel="stylesheet" href="style.css">

        <h2>Democracy to Dictatorship</h2>
        <nav>
            <a href="#">Home</a>
            <a href="#">Blog</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
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