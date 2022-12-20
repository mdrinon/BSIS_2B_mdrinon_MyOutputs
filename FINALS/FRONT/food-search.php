<?php include('subfiles/header.php'); ?>

<?php include('search-section.php'); ?>

    <!-- section for searched food/s  -->
    <section class="food-menu">
        <div class="container">


            <?php 

                //Get the Search Keyword
                // $search = $_POST['search'];
                $search = mysqli_real_escape_string($conn, $_POST['search']);
            
            ?>
            <h2 class="text-center">"<?php echo $search; ?>"</a></h2>


            <?php 

                //SQL Query to Get foods based on search keyword
                $sql = "SELECT * FROM tbl_menu WHERE food_name LIKE '%$search%' OR description LIKE '%$search%' OR price LIKE '%$search%' OR food_category LIKE '%$search%'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether food available or not
                if($count>0)
                {
                    //Food Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the details
                        $id = $row['item_id'];
                        $food_category = $row['food_category'];
                        $food_name = $row['food_name'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $food_image = $row['food_image'];
                        ?>

                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php 
                                    // Check whether image name is available or not
                                    if($food_image=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>subfiles/images/<?php echo $food_image; ?>" alt="" class="img-responsive img-curve">
                                        <?php 

                                    }
                                ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h3><?php echo $food_name; ?></h3>
                                <p class="food-price">Php<?php echo $price; ?></p>
                                <p class="food-detail">
                                    <?php echo $description; ?>
                                </p><br>
                                
                                <!--a href="#" class="cart-btn btn-primary">Add to Cart<img src="subfiles/images/cart.png" class="fab-icon"></a-->
                                <a href="<?php echo SITEURL; ?>btn-order-now.php?item_id=<?php echo $id; ?>" class="cart-btn btn-primary">Order Now <img class="fab-icon" src="subfiles/images/order-now.png" ></a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food Not Available
                    echo "<div class='error'>Searched Food 'NOT FOUND'</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- searched food/s Ends Here -->

<?php include('subfiles/footer.php'); ?>