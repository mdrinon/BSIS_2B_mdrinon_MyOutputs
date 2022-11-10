<?php include('subfiles/header.php'); ?>
    <link rel="stylesheet" href="subfiles/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   
   


<div class="main-content">
  <div class="wrapper">
    <div class="logo">
      <h1 class="ml-0">DASHBOARD</h1>
    </div>

    <div class="menu text-right">
      <div class="wrapper">
        <form action="#" method="POST">
          <input type="submit" name="submit" value="Search" class="search-btn">
          <input type="search" name="search" placeholder="Search "Dashboard">
        </form>
      </div>
    </div>

  </div>
</div>

<article>
 <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">₱12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>
    </div>
  </section>
</article>
<div class="clearfix"><br><br><br><br></div>
<?php include('subfiles/footer.php'); ?>
