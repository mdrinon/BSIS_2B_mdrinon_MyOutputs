  <!--Pending Orders-->
  <div class="home-content text-center" style="margin-top: -100px">
        <fieldset id="fieldset3" style="border-color:black">
        <legend><h3>Pending Orders</h3></legend>
          <table class="tbl-full">
                    <tr>
                        <th>I.D.</th>
                        <th>FOOD</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>ORDER_DATE</th>
                        <th>NAME</th>
                        <th>CONTACT NUMBER</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                    </tr>               
                        
                    <?php

                        require('connect-db.php');

                        $sl=0;
                        $query1=mysqli_query($conn,"SELECT * FROM tbl_order");
                        while($row=mysqli_fetch_array($query1))
                        {
                    ?>

                    <tr>
                        <td> <?php echo $row['id']; ?></td>
                        <td> <?php echo $row['food']; ?></td>
                        <td> <?php echo $row['price']; ?></td>
                        <td> <?php echo $row['quantity']; ?></td>
                        <td> <?php echo $row['total']; ?></td>
                        <td> <?php echo $row['order_date']; ?></td>
                        <td> <?php echo $row['customer_name']; ?></td>
                        <td> <?php echo $row['customer_contact']; ?></td>
                        <td> <?php echo $row['customer_email']; ?></td>
                        <td> <?php echo $row['customer_address']; ?></td>
                    </tr>
                    <?php } ?>         

                </table><br><br><br>
        </fieldset>
      </div>