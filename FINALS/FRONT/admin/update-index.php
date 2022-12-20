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

          <?php 
                //Sql Query 
                $sql = "SELECT * FROM tbl_category";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>

            <div class="box-topic">Categories</div>
            <div class="number"><?php echo $count; ?></div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">

          <?php 
                //Sql Query 
                $sql2 = "SELECT * FROM tbl_food";
                //Execute Query
                $res2 = mysqli_query($conn, $sql2);
                //Count Rows
                $count2 = mysqli_num_rows($res2);
            ?>

            <div class="box-topic">Total Foods</div>
            <div class="number"><?php echo $count2; ?></div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">

          <?php 
                //Sql Query 
                $sql3 = "SELECT * FROM tbl_order";
                //Execute Query
                $res3 = mysqli_query($conn, $sql3);
                //Count Rows
                $count3 = mysqli_num_rows($res3);
            ?>

            <div class="box-topic">Total Orders</div>
            <div class="number"><?php echo $count3; ?></div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
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
                $total_revenue = $row4['Total'];

            ?>
            
            <div class="box-topic">REVENUE</div>
            <div class="number">₱<?php echo $total_revenue; ?></div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>
    </div>
  </section>
</article>
<div class="clearfix"><br><br><br><br></div>
<?php include('subfiles/footer.php'); ?>






<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>
        <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
        ?>
        <br><br>

        <div class="col-4 text-center">

            <?php 
                //Sql Query 
                $sql = "SELECT * FROM tbl_category";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>

            <h1><?php echo $count; ?></h1>
            <br />
            Categories
        </div>

        <div class="col-4 text-center">

            <?php 
                //Sql Query 
                $sql2 = "SELECT * FROM tbl_food";
                //Execute Query
                $res2 = mysqli_query($conn, $sql2);
                //Count Rows
                $count2 = mysqli_num_rows($res2);
            ?>

            <h1><?php echo $count2; ?></h1>
            <br />
            Foods
        </div>

        <div class="col-4 text-center">
            
            <?php 
                //Sql Query 
                $sql3 = "SELECT * FROM tbl_order";
                //Execute Query
                $res3 = mysqli_query($conn, $sql3);
                //Count Rows
                $count3 = mysqli_num_rows($res3);
            ?>

            <h1><?php echo $count3; ?></h1>
            <br />
            Total Orders
        </div>

        <div class="col-4 text-center">
            
            <?php 
                //Creat SQL Query to Get Total Revenue Generated
                //Aggregate Function in SQL
                $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                //Execute the Query
                $res4 = mysqli_query($conn, $sql4);

                //Get the VAlue
                $row4 = mysqli_fetch_assoc($res4);
                
                //GEt the Total REvenue
                $total_revenue = $row4['Total'];

            ?>

            <h1>$<?php echo $total_revenue; ?></h1>
            <br />
            Revenue Generated
        </div>

        <div class="clearfix"></div>

    </div>
</div>