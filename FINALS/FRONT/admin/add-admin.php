<?php include('subfiles/header.php'); ?>
<!--Main Content Section starts-->
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>

        <form method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="enter name" required>
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="enter username" required>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="enter password" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="Submit" value="Add Admin" class="btn btn-warning">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button onclick="history.back()" class="btn btn-danger">Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('subfiles/footer.php'); ?>

<?php

    if(isset($_POST['full_name'], $_POST['username'], $_POST['password']))
    {
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $password = ($_POST['password']);


        //check duplicate entry

        $query1=mysqli_query($conn,"SELECT * FROM tbl_admin WHERE full_name='$full_name'");
        

            //insert data

            if(mysqli_num_rows($query1)==0)
            {
                $query2=mysqli_query($conn,"INSERT INTO tbl_admin (full_name, username, password) VALUES
                    ('$full_name', '$username', '$password')");
                echo '<script>alert("Admin Added Successfully!");window.location.href="manage-admin.php";</script>';
            }
            else
            {
                echo '<script>alert("Admin NOT Inserted.");window.location.href="add-admin.php"</script>';
            }

    }
?>