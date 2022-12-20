<?php include('subfiles/header.php'); ?>
    <link rel="stylesheet" href="subfiles/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="subfiles/boxicons.min.css">
   


<div class="main-content">
  <div class="wrapper">
    <div class="logo">
      <h1 class="ml-0">DASHBOARD</h1>
    </div>
  </div>
</div>

<article>
  <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">
          <div class="col-4 text-center">
              <?php 
                  //Sql Query 
                  $sql = "SELECT * FROM tbl_category";
                  //Execute Query
                  $res = mysqli_query($conn, $sql);
                  //Count Rows
                  $count = mysqli_num_rows($res);
              ?>

              <h2><a href="categories.php"><?php echo $count; ?></h2>
            
              Categories
          </div></a>

          <div class="col-4 text-center">

              <?php 
                  //Sql Query 
                  $sql2 = "SELECT * FROM tbl_menu";
                  //Execute Query
                  $res2 = mysqli_query($conn, $sql2);
                  //Count Rows
                  $count2 = mysqli_num_rows($res2);
              ?>

              <h2><a href="food-menu.php"><?php echo $count2; ?></h2>
              
              Foods
          </div></a>

          <div class="col-4 text-center">

              <?php 
                  //Sql Query 
                  $sql3 = "SELECT * FROM tbl_order";
                  //Execute Query
                  $res3 = mysqli_query($conn, $sql3);
                  //Count Rows
                  $count3 = mysqli_num_rows($res3);
              ?>

              <h2><a href="delivered-orders.php"><?php echo $count3; ?></h2>
              
              Orders
          </div></a>

          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </section></br>
  <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box"><a href="">
          <div class="right-side">
              <?php 
                //Creat SQL Query to Get Total Revenue Generated
                //Aggregate Function in SQL
                $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                //Execute the Query
                $res4 = mysqli_query($conn, $sql4);

                //Get the VAlue
                $row4 = mysqli_fetch_assoc($res4);
                
                //GEt the Total REvenue
                $total_sales = $row4['Total'];

            ?>
            <div class="box-topic">Sales</div>
            <div class="number">₱<?php echo $total_sales; ?></div></a>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">As of Today</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
          <?php 
                //Creat SQL Query to Get Total Revenue Generated
                //Aggregate Function in SQL
                $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Cancelled'";

                //Execute the Query
                $res4 = mysqli_query($conn, $sql4);

                //Get the VAlue
                $row4 = mysqli_fetch_assoc($res4);
                
                //GEt the Total REvenue
                $total_returns = $row4['Total'];

            ?>
            <div class="box-topic">Sales Returns</div>
            <div class="number">₱
            <?php echo $total_returns; ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">As of Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
          <?php 
                //Creat SQL Query to Get Total Revenue Generated
                //Aggregate Function in SQL
                $sql5 = "SELECT SUM(total) from (SELECT SUM(total) AS total FROM tbl_order WHERE status='Delivered' UNION ALL SELECT SUM(total * -1) AS total FROM tbl_order WHERE status='Cancelled')a";

                //Execute the Query
                $res5 = mysqli_query($conn, $sql5);

                //Get the VAlue
                $row5 = mysqli_fetch_assoc($res5);
                
                //GEt the Total REvenue
                $total_income = $row5;
            ?>
            <div class="box-topic">Net Income</div>
            <div class="number">₱<?php echo $total_income['SUM(total)']; ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">As of Today</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
      </div>
    </div>
  </section>
</article>
<div class="clearfix"><br><br><br><br></div>
<?php include('subfiles/footer.php'); ?>