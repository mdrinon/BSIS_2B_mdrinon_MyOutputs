<?php include('subfiles/header.php'); ?>

<?php include('search-section.php'); ?>

<?php include('categories.php'); ?>

    <?php 
        //CHeck whether id is passed or not
        if(isset($_GET['category_id']))
        {
            //Category id is set and get the id
            $category_id = $_GET['category_id'];
            // Get the CAtegory NAME Based on Category ID
            $sql = "SELECT category FROM tbl_category WHERE id=$category_id";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Get the value from Database
            $row = mysqli_fetch_assoc($res);
            //Get the food_name
            $category = $row['category'];
        }
        else
        {
            //CAtegory not passed
            //Redirect to Home page
            header('location:'.SITEURL);
        }
    ?>


    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">

            <h2 class="text-center">"<?php echo $category; ?>"</h2>

            <?php
            
                //Create SQL Query to Get foods based on Selected CAtegory
                $sql2 = "SELECT * FROM tbl_menu WHERE category_id=$category_id";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Count the Rows
                $count2 = mysqli_num_rows($res2);

                //CHeck whether food is available or not
                if($count2>0)
                {
                    //Food is Available
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        $id = $row2['item_id'];
                        $food_name = $row2['food_name'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $food_image = $row2['food_image'];
                        ?>
                        
                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php 
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
                                
                                <a href="" class="cart-btn btn-primary">Add to Cart<img src="subfiles/images/cart.png" class="fab-icon"></a>
                                <a href="<?php echo SITEURL; ?>btn-order-now.php?item_id=<?php echo $id; ?>" class="cart-btn btn-primary">Order Now <img class="fab-icon" src="subfiles/images/order-now.png" ></a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food not available
                    echo "<div class='error'>Food not Available.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('subfiles/footer.php'); ?>