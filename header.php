
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
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
            <a href="#">
                
            <i class='bx bxs-user' ></i>
                <span class="links_name">user</span>
            </a>
            <span class="tooltip">Dashboard</span>

        </li>
        <li>
            <a href="#">
                
            <i class='bx bx-bullseye'></i>
                <span class="links_name">Army</span>
            </a>
            <span class="tooltip">Army</span>

        </li>
        <li>
            <a href="#">
                
                <i class='bx bx-money'></i>
                <span class="links_name">Money</span>
            </a>
            <span class="tooltip">Money</span>

        </li>
        
    </ul>
    <i class='bx bx-log-out-circle' id="log_out"></i>
</div>







  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>

















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
       <!-- <nav class="navigation">
  <div class="nav_icon">
    <i class="fas fa-bars"></i>
  </div>
  <ul class="nav_list">

    <li class="list-item" data-tooltip="Codepen">
      <a href="#">
        <i class="fab fa-codepen "></i>
        <span class="text">codepen</span>
      </a>
    </li>
    <li class="list-item" data-tooltip="Opera">
      <a href="#">
        <i class="fab fa-opera "></i>
        <span class="text">opera</span>
      </a>
    </li>
    <li class="list-item" data-tooltip="Army">
      <a href="#">
        <i class="fab fa-Army "></i>
        <span class="text">Army</span>
      </a>
    </li>

    <li class="list-item" data-tooltip="Firefox">
      <a href="#">
        <i class="fab fa-firefox "></i>
        <span class="text">firefox</span>
      </a>
    </li>
    <li class="list-item" data-tooltip="Linux">
      <a href="#">
        <i class="fab fa-linux "></i>
        <span class="text">linux</span>
      </a>
    </li>
    <li class="list-item" data-tooltip="Facebook">
      <a href="#">
        <i class="fab fa-facebook "></i>
        <span class="text">facebook</span>
      </a>
    </li>
    <li class="list-item" data-tooltip="CSS3">
      <a href="#">
        <i class="fab fa-css3 "></i>
        <span class="text">css3</span>
      </a>
    </li>
    <li class="list-item" data-tooltip="Python">
      <a href="#">
        <i class="fab fa-python "></i>
        <span class="text">python</span>
      </a>
    </li>
    <li class="list-item" data-tooltip="Settings">
      <a href="#">
        <i class="fas fa-cog "></i>
        <span class="text">settings</span>
      </a>
    </li>
  </ul>
</nav>


<script>const sidebar = document.querySelector(".navigation");
const navIcon = document.querySelector(".fas");

navIcon.addEventListener("click", () => {
  sidebar.classList.toggle("active");
});
</script> -->














    </header>