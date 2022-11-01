<?php include('subfiles/header.php'); ?>


        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>

                <br /><br />

                <!-- Button to Add Admin -->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                
                <br><br><br><br><br>

                <table class="tbl-full">
                    <tr>
                        <th>I.D.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>               
                        
                    <?php

                        require('connect-db.php');

                        $sl=0;
                        $query1=mysqli_query($conn,"SELECT * FROM tbl_admin");
                        while($row=mysqli_fetch_array($query1))
                        {
                    ?>

                    <tr>
                        <td> <?php echo $row['id']; ?></td>
                        <td> <?php echo $row['full_name']; ?></td>
                        <td> <?php echo $row['username']; ?></td>
                        <td> <?php echo $row['password']; ?></td>

                        <td>
                            <a href="#" class="btn-primary">Change Password</a>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <?php } ?>              
                </table><br><br><br><hr>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

<?php include('subfiles/footer.php'); ?>