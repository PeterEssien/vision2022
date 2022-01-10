<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>



<html lang="en" dir="ltr">

  <head>

    <meta charset="UTF-8">

    <!--<title>Gold-dyx Dashboard</title>-->

    <link rel="stylesheet" href="style.css">

    <!-- Boxicons CDN Link -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Dashboard</title>
    <link href="../img/assets/favicon.ico" rel="icon" type="image/png" />

   </head>

<body>

  <div class="sidebar">

    <div class="logo-details">

      <i class='bx bxl-c-plus-plus'></i>

      <span class="logo_name">Gold-dyx</span>

    </div>

      <ul class="nav-links">

        <li>

          <a href="#" class="active">

            <i class='bx bx-grid-alt' ></i>

            <span class="links_name">Dashboard</span>

          </a>

        </li>

        <li>

          <a href="deposit.html">

            <i class='bx bx-box' ></i>

            <span class="links_name">Deposit</span>

          </a>

        </li>

        <li>

          <a href="withdraw.php">

            
             <i class='bx bx-coin-stack' ></i>

            <span class="links_name">Withdraw</span>

          </a>

        </li>

        <li>

          <a href="analysis.html">

            <i class='bx bx-pie-chart-alt-2' ></i>

            <span class="links_name">Trade Analysis</span>

          </a>

        </li>

        <li>

          <a href="https://explorer.lbtc.io/">

           <i class='bx bx-list-ul' ></i>
            <span class="links_name">Transactions</span>

          </a>

        </li>
<li>

          <a href="https://tawk.to/chat/61633360157d100a41abb62d/1fhlo1dg8">

            <i class='bx bx-message' ></i>

            <span class="links_name">Live Chat</span>

          </a>

        </li>
       

        <li class="log_out">

          <a href="logout.php">

            <i class='bx bx-log-out'></i>

            <span class="links_name">Log out</span>

          </a>

        </li>

      </ul>

  </div>

  <section class="home-section">

    <nav>

      <div class="sidebar-button">

        <i class='bx bx-menu sidebarBtn'></i>

        <span class="dashboard">Dashboard</span>

      </div>

      <div class="search-box">

        <input type="text" placeholder="Search...">

        <i class='bx bx-search' ></i>

      </div>

      <div class="profile-details">

        <!--<img src="images/profile.jpg" alt="">-->

        <span class="admin_name"><?php echo $_SESSION['username']; ?></span>

        <i class='bx bx-chevron-down' ></i>

      </div>

    </nav>

    <div class="home-content">

      <div class="overview-boxes">

        <div class="box">

          <div class="right-side">

            <div class="box-topic">Total Users</div>

            <div class="number">55,216</div>

            <div class="indicator">

              <i class='bx bx-up-arrow-alt'></i>

              <span class="text">Up from yesterday</span>

            </div>

          </div>

          <i class='bx bx-cart-alt cart'></i>

        </div>

        <div class="box">

          <div class="right-side">

            <div class="box-topic">Active Users</div>

            <div class="number">42,177</div>

            <div class="indicator">

              
               <i class='bx bx-down-arrow-alt down'></i>

              <span class="text">Down From Today</span>

            </div>

          </div>

           <i class='bx bxs-cart-download cart four' ></i>
        </div>

        

        <div class="box">

          <div class="right-side">

            <div class="box-topic">Your profits</div>

            <div class="number">$<?php echo $_SESSION['profits']; ?>.00</div>

            <div class="indicator">

              <i class='bx bx-up-arrow-alt'></i>

              <span class="text">Updated 1 Minute Ago</span>

            </div>

          </div>

           <i class='bx bxs-cart-add cart two' ></i>

        </div>

      </div>

      <div class="sales-boxes">

        <div class="recent-sales box">

          <div class="title">Top Investors Gain</div>

          <div class="sales-details">

            <ul class="details">

              <li class="topic">Date</li>

             <li><a href="#">08 Jan 2022</a></li>

             <li><a href="#">04 Jan 2021</a></li>

              <li><a href="#">02 Jan 2022</a></li>

              <li><a href="#">01 Jan 2022</a></li>


             <li><a href="#">31 Dec 2021</a></li>

             <li><a href="#">29 Dec 2021</a></li>

              <li><a href="#">01 Dec 2021</a></li>

              <li><a href="#">18 Nov 2021</a></li>


              <li><a href="#">13 Oct 2021</a></li>

              <li><a href="#">11 Oct 2021</a></li>

              <li><a href="#">08 Oct 2021</a></li>

              <li><a href="#">31 Sep 2021</a></li>

              <li><a href="#">18 Sep 2021</a></li>

              <li><a href="#">01 Sep 2021</a></li>

              <li><a href="#">22 Aug 2021</a></li>

              <li><a href="#">16 Aug 2021</a></li>

              <li><a href="#">02 Aug 2021</a></li>

            </ul>

            <ul class="details">

            <li class="topic">Customer</li>

            <li><a href="#">Godfrey Hanson</a></li>

            <li><a href="#">Maggi Shroom</a></li>

            <li><a href="#">Paul Denim</a></li>

            <li><a href="#">Anthony Sigurdsson</a></li>


            <li><a href="#">Mary Jeffery</a></li>

            <li><a href="#">Jadyn Matt</a></li>

            <li><a href="#">Williams Parker</a></li>

            <li><a href="#">Helena Dunn</a></li>


            <li><a href="#">Alex Ocean</a></li>

            <li><a href="#">David Mart</a></li>

            <li><a href="#">Roe Parter</a></li>

            <li><a href="#">Diana Penty</a></li>

            <li><a href="#">Martin Paw</a></li>

            <li><a href="#">Regan Malt</a></li>

            <li><a href="#">Aiana Lexa</a></li>

            <li><a href="#">Rexel Mags</a></li>

             <li><a href="#">Tiana Loths</a></li>

          </ul>

          <ul class="details">

            <li class="topic">Status</li>

            <li><a href="#">Pending</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>


            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

             <li><a href="#">Paid</a></li>

            <li><a href="#">Paid</a></li>

          </ul>

          <ul class="details">

            <li class="topic">Amount</li>

           <li><a href="#">$6,168.33</a></li>

           <li><a href="#">$13,368.87</a></li>

            <li><a href="#">$3,342.26</a></li>

            <li><a href="#">$43,251.32</a></li>


          <li><a href="#">$691,168.33</a></li>

           <li><a href="#">$195,368.87</a></li>

            <li><a href="#">$10,342.26</a></li>

            <li><a href="#">$34,251.32</a></li>


            <li><a href="#">$205,000.98</a></li>

            <li><a href="#">$214,543.55</a></li>

            <li><a href="#">$415,871.88</a></li>

            <li><a href="#">$180,549.66</a></li>

            <li><a href="#">$56,026.56</a></li>

            <li><a href="#">$15,052.95</a></li>

            <li><a href="#">$112,221.33</a></li>

             <li><a href="#">$23,180.53</a></li>

             <li><a href="#">$68,719.52</a></li>

          </ul>

          </div>

          <div class="button">

            <a href="https://explorer.lbtc.io/">Latest</a>

          </div>

        </div>

        <div class="top-sales box">

          <div class="title">Top Selling Cryptocurrencies</div>

          <ul class="top-sales-details">

            <li>

            <a href="#">

              <!--<img src="images/sunglasses.jpg" alt="">-->

              <span class="product">Bitcoin</span>

            </a>

            <span class="price">7.7%</span>

          </li>

          <li>

            <a href="#">

               <!--<img src="images/jeans.jpg" alt="">-->

              <span class="product">Ethereum</span>

            </a>

            <span class="price">6.8%</span>

          </li>

          <li>

            <a href="#">

             <!-- <img src="images/nike.jpg" alt="">-->

              <span class="product">XRP</span>

            </a>

            <span class="price">3.2%</span>

          </li>

          <li>

            <a href="#">

              <!--<img src="images/scarves.jpg" alt="">-->

              <span class="product">Bitcoin Cash</span>

            </a>

            <span class="price">7.6%</span>

          </li>

          <li>

            <a href="#">

              <!--<img src="images/blueBag.jpg" alt="">-->

              <span class="product">Cardano</span>

            </a>

            <span class="price">6.3%</span>

          </li>

          <li>

            <a href="#">

              <!--<img src="images/bag.jpg" alt="">-->

              <span class="product">Dogecoin</span>

            </a>

            <span class="price">5.0%</span>

          <li>

            <a href="#">

              <!--<img src="images/addidas.jpg" alt="">-->

              <span class="product">Tether</span>

            </a>

            <span class="price">6.5%</span>

          </li>

<li>

            <a href="#">

             <!--<img src="images/shirt.jpg" alt="">-->

              <span class="product">TRON</span>

            </a>

            <span class="price">5.1%</span>

          </li>

          </ul>

        </div>

      </div>

    </div>

  </section>

  <script>

   let sidebar = document.querySelector(".sidebar");

let sidebarBtn = document.querySelector(".sidebarBtn");

sidebarBtn.onclick = function() {

  sidebar.classList.toggle("active");

  if(sidebar.classList.contains("active")){

  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");

}else

  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");

}

 </script>

</body>

</html>

