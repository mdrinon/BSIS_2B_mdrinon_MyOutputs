<?php include('subfiles/header.php'); ?>
<!-- Mmanage admin -->
        
        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br>
                <?php
                    if(isset($message)){
                        foreach($message as $message){
                        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
                    }
                    }
                ?>

                <br /> <br />

                <!-- Button to Add Admin -->
                <a href="add-admin.php" class="btn-info">Add Admin</a>
                
                <br /> <br /> <br /> <br />

                <table class="tbl-full">
                    <tr>
                        <th>Serial Number</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>               
                        
    <?php 
        //Query to Get all Admin
        $sql = "SELECT * FROM tbl_admin";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //CHeck whether the Query is Executed of Not
        if($res==TRUE)
        {
            // Count Rows to CHeck whether we have data in database or not
            $count = mysqli_num_rows($res); // Function to get all the rows in database

            $sn=1; //Create a Variable and Assign the value

            //CHeck the num of rows
            if($count>0)
            {
                //WE HAve data in database
                while($rows=mysqli_fetch_assoc($res))
                {
                    //Using While loop to get all the data from database.
                    //And while loop will run as long as we have data in database

                    //Get individual DAta
                    $id=$rows['id'];
                    $full_name=$rows['full_name'];
                    $username=$rows['username'];
                    //Display the Values in our Table
                    ?>
                    
                    <tr>
                        <td>00<?php echo $sn++; ?></td>
                        <td><?php echo $full_name; ?></td>
                        <td><?php echo $username; ?></td>

                        <td>
                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" onclick="return confirm('Confirm Delete Admin \nDeletion cannot be reverted if you confirm!');" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>

                    <?php

                }
            }
            else
            {
                //We Do not Have Data in Database
            }
        }

    ?>
                    
                </table>
                <br><br><br><hr>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

<script>
function confdelete() {
    var x;
    var r = confirm("Confirm Delete Admin \nDeletion cannot be reverted if you confirm!");
    if (r == true) {
        r = "You pressed OK!";
    }
    else {
        x = "You pressed Cancel!";
    }
    document.getElementById("conf").innerHTML = x;
}
</script>

<?php include('subfiles/footer.php'); ?>