<?php

    require('connect-db.php');

    if(isset($_POST['full_name'], $_POST['username'], $_POST['password']))
    {
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        //check duplicate entry

        $query1=mysqli_query($conn,"SELECT * FROM tbl_admin WHERE full_name='$full_name'");

            //insert data

            if(mysqli_num_rows($query1)==0)
            {
                $query2=mysqli_query($conn,"INSERT INTO tbl_admin (full_name, username, password) VALUES
                    ('$full_name', '$username', '$password')");
                echo '<script>alert("Registration is Successfull");window.location.href="manage-admin.php";</script>';
            }
            else
            {
                echo '<script>alert("Registration Failed");window.location.href="index.php"</script>';
            }

    }
?>