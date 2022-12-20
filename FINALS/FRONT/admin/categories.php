<?php include('subfiles/header.php'); ?>
<!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">CATEGORIES</h2>

            <div class="tiles">

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 4";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, food_name, image_name
                        $id = $row['id'];
                        $category = $row['category'];
                        $image_name = $row['image_name'];
                        ?>
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>subfiles/images/<?php echo $image_name; ?>" class="img-responsive category-img">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="category-name"><?php echo $category; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>
            </div>


            <div class="clearfix"></div>
        </div><br><br>

        <div class="text-center"><p><a href="javascript: history.back(-1)">RETURN</a></p></div>

    </section>
<!-- Categories Section Ends Here -->
<?php include('subfiles/footer.php'); ?>