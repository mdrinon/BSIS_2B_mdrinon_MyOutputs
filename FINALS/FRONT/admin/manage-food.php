<?php include('subfiles/header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>

        <br /><br />

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Food Category</th>
                        <th>Food Name</th>
                        <th>Food Image</th>
                        <th>Price</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>               
                        
                    <?php 
                        //Create a SQL Query to Get all the Food
                        $sql = "SELECT * FROM tbl_menu";

                        //Execute the qUery
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have foods or not
                        $count = mysqli_num_rows($res);

                        //Create Serial Number VAriable and Set Default VAlue as 1
                        $sn=1;

                        if($count>0)
                        {
                            //We have food in Database
                            //Get the Foods from Database and Display
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
                                $i_id = $rows['item_id'];
                                $fc = $rows['food_category'];
                                $f_name = $rows['food_name'];
                                $f_image = $rows['food_image'];
                                $price = $rows['price'];
                                $featured = $rows['featured'];
                                $active = $rows['active'];
                                ?>

                            <tr>
                                <td>00<?php echo $i_id; ?></td>
                                <td><?php echo $fc; ?></td>
                                <td><?php echo $f_name; ?></td>
                                <td>
                                    <?php  
                                        //CHeck whether we have image or not
                                        if($f_image=="")
                                        {
                                            //WE do not have image, Dislpay Error Message
                                            echo "<div class='error'>Image not Added.</div>";
                                        }
                                        else
                                        {
                                            //WE Have Image, Display Image
                                            ?>
                                            <img src="<?php echo SITEURL; ?>./subfiles/images/<?php echo $f_image; ?>" width="100px">
                                            <?php
                                        }
                                    ?>
                                </td>
                                <td>₱<?php echo $price; ?></td>
                                <td><?php echo $featured; ?></td>
                                <td><?php echo $active; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" class="btn-secondary">Update Food</a>
                                </td>
                            </tr>


                                <?php
                            }
                        }
                        else
                        {
                            //Food not Added in Database
                            echo "<tr> <td colspan='7' class='error'> Food not Added Yet. </td> </tr>";
                        }

                    ?>

                    
                </table>
    </div>
    
</div>

<?php include('subfiles/footer.php'); ?>