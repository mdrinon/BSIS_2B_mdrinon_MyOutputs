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

<div class="pending-order text-center">Pending Orders</div>

<main>
<?php

$query=mysqli_query($conn,"SELECT * FROM tbl_order");
while($row=mysqli_fetch_array($query))
{
?>

  <div class="pending-orders">
  <section class="home-section">
  <div class="home-content">
    <div class="overview-boxes">
      <div class="box">
        <div class="right-side">
          <div class="box-topic">
            <label for="Status">Food Order Status: </label>
            <select name="Status" id="" placeholder="Select Status">
              <option value=""><h1>Pending</h1></option>
              <option value=""><h1>Preparation</h1></option>
              <option value=""><h1>Delivered</h1></option>
              <option value=""><h1>Cancelled</h1></option>
            </select> 
          </div>
              <p>Date Ordered: <?php echo $row['order_date']; ?></p><br>
          <div>
            <table class="tbl-full">
              <tr>
                  <th>FOOD</th>
                  <th>PRICE</th>
                  <th>QUANTITY</th>
                  <th>TOTAL</th>
                  
                  <th>NAME</th>
                  <th>CONTACT NUMBER</th>
                  <th>EMAIL</th>
                  <th>ADDRESS</th>
              </tr>
              <tr>
                  <td> <?php echo $row['food']; ?></td>
                  <td> <?php echo $row['price']; ?></td>
                  <td> <?php echo $row['quantity']; ?></td>
                  <td> <?php echo $row['total']; ?></td>

                  <td> <?php echo $row['customer_name']; ?></td>
                  <td> <?php echo $row['customer_contact']; ?></td>
                  <td> <?php echo $row['customer_email']; ?></td>
                  <td> <?php echo $row['customer_address']; ?></td>
              </tr>
            </table><br>
          </div>
        </div>
      </div>

    <div class="box">
      <div class="right-side">
        <div class="box-topic">
          <label for="Status">Food Order Status: </label>
          <select name="Status" id="" placeholder="Select Status">
            <option value=""><h1>Pending</h1></option>
            <option value=""><h1>Preparation</h1></option>
            <option value=""><h1>Delivered</h1></option>
            <option value=""><h1>Cancelled</h1></option>
          </select> 
        </div>
            <p>Date Ordered: <?php echo $row['order_date']; ?></p><br>
        <div>
            <h4><?php echo $row['food']; ?></h4>
            <p> Quantity: <?php echo $row['quantity']; ?></p>
        </div>
        <div>
            <h4>Total: ₱<?php echo $row['total']; ?></h4><br>
        </div>
        <div>
          <h4>Customer Details</h4>
          <p>Name: <?php echo $row['customer_name']; ?></p>
          <p>Contact: <?php echo $row['customer_contact']; ?></p>
          <p>Email: <?php echo $row['customer_email']; ?></p>
          <p>Address: <?php echo $row['customer_address']; ?></p>
        </div>
      </div>
    </div>

    <div class="box">
      <div class="right-side">
        <div class="box-topic">
          <label for="Status">Food Order Status: </label>
          <select name="Status" id="" placeholder="Select Status">
            <option value=""><h1>Pending</h1></option>
            <option value=""><h1>Preparation</h1></option>
            <option value=""><h1>Delivered</h1></option>
            <option value=""><h1>Cancelled</h1></option>
          </select> 
        </div>
            <p>Date Ordered: <?php echo $row['order_date']; ?></p><br>
        <div>
            <h4><?php echo $row['food']; ?></h4>
            <p> Quantity: <?php echo $row['quantity']; ?></p>
        </div>
        <div>
            <h4>Total: ₱<?php echo $row['total']; ?></h4><br>
        </div>
        <div>
          <h4>Customer Details</h4>
          <p>Name: <?php echo $row['customer_name']; ?></p>
          <p>Contact: <?php echo $row['customer_contact']; ?></p>
          <p>Email: <?php echo $row['customer_email']; ?></p>
          <p>Address: <?php echo $row['customer_address']; ?></p>
        </div>
      </div>
    </div>
    
    
    <div class="box">
      <div class="right-side">
        <div class="box-topic">
          <label for="Status">Food Order Status: </label>
          <select name="Status" id="" placeholder="Select Status">
            <option value=""><h1>Pending</h1></option>
            <option value=""><h1>Preparation</h1></option>
            <option value=""><h1>Delivered</h1></option>
            <option value=""><h1>Cancelled</h1></option>
          </select> 
        </div>
            <p>Date Ordered: <?php echo $row['order_date']; ?></p><br>
        <div>
            <h4><?php echo $row['food']; ?></h4>
            <p> Quantity: <?php echo $row['quantity']; ?></p>
        </div>
        <div>
            <h4>Total: ₱<?php echo $row['total']; ?></h4><br>
        </div>
        <div>
          <h4>Customer Details</h4>
          <p>Name: <?php echo $row['customer_name']; ?></p>
          <p>Contact: <?php echo $row['customer_contact']; ?></p>
          <p>Email: <?php echo $row['customer_email']; ?></p>
          <p>Address: <?php echo $row['customer_address']; ?></p>
        </div>
      </div>
    </div>


  </div>
</div>
</section>

<?php } ?> 

</div>
</main>
<div class="clearfix"><br><br><br><br></div>
<?php include('subfiles/footer.php'); ?>