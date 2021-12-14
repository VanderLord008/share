<header>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-c-plus-plus'></i>
                <div class="logo_name">
                    dtd
                </div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="links.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="index.php">

                    <i class='bx bxs-home-circle'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>

            </li>
            <li>
                <a href="playerstats.php">

                    <i class='bx bxs-user'></i>
                    <span class="links_name">user</span>
                </a>
                <span class="tooltip">user</span>

            </li>
            <li>
                <a href="conflicts.php">

                    <i class='bx bx-bullseye'></i>
                    <span class="links_name">conflicts</span>
                </a>
                <span class="tooltip">conflicts</span>

            </li>
            <li>
                <a href="#">

                    <i class='bx bx-money'></i>
                    <span class="links_name">Money</span>
                </a>
                <span class="tooltip">Money</span>

            </li>
            <li>
                <a href="logout.php">

                    <i class='bx bx-log-out-circle' id="log_out"></i>
                    <span class="links_name">Logout</span>
                </a>
                <span class="tooltip">Logout</span>

            </li>

        </ul>

    </div>







    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>

    <h2>Democracy to Dictatorship</h2>

    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "
                <div class='user'>
                $_SESSION[username] - <a href='logout.php'>logout</a>
                </div>
                ";
    } else {
        echo "
            <div class='signin'>
            <button type='button' onclick=\"popup('login popup')\">login</button>
            <button type='button' onclick=\"popup('register popup')\">register</button>
            </div>
            ";
    }
    ?>


</header>