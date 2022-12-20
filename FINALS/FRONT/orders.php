<?php include('subfiles/header.php'); 
$username = $_SESSION['user'];
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>

                <br><br>

                <table class="tbl-full text-center">
                    <tr>
                        <th>Food</th>
                        <th>Price</th>
                        <th>Qty.</th>
                        <th>Total</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Customer Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Update my Order</th>
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM tbl_order WHERE username = '$username' ORDER BY id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //Create a Serial Number and set its initail value as 1

                        if($count>0)
                        {
                            //Order Available
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id=$rows['id'];
                                $food_name=$rows['food'];
                                $price=$rows['price'];
                                $qty=$rows['qty'];
                                $total=$rows['total'];
                                $order_date=$rows['order_date'];
                                $status=$rows['status'];
                                $customer_name=$rows['customer_name'];
                                $customer_contact=$rows['customer_contact'];
                                $customer_email=$rows['customer_email'];
                                $customer_address=$rows['customer_address'];
                                
                                ?>

                                    <tr class="text-center">
                                        <td><?php echo $food_name; ?></td>
                                        <td>Php<?php echo $price; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $order_date; ?></td>
                                        <td><?php echo $status; ?></td>
                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $customer_contact; ?></td>
                                        <td><?php echo $customer_email; ?></td>
                                        <td><?php echo $customer_address; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update Order</a>
                                        </td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'> No Orders Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>
<?php include('subfiles/footer.php'); ?>