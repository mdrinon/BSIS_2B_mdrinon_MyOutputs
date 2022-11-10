<?php include('subfiles/connect-db.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 5px;
    padding: 10% 35%;
    }

    h2 {
    color: orangered;
    font-weight: bold;
    text-align: center;
    }

    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 0 0 10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    input[type=submit] {
    background-color: #ff7f50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    width: 100%;
    }

    input[type=submit]:hover {
    background-color: orangered;
    opacity: 0.8;
    }
</style>
</head>
<body>
  <div>
    <h2>SIGN IN</h2><br>
  </div>
  <form action="" method="POST" class="text-center">
    <div class="container">

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <br /><br />

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <br /><br />

      <input type="submit" name="submit" value="Login" class="btn-primary">
      
    </div>
  </form>
</div>
</body>
</html>


  <?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = ($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = ($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            echo '<script>alert("Login Successful.");window.location.href="index.php"</script>';
            $_SESSION['user'] = $username;
            //TO check whether the user is logged in or not and logout will unset it
            //REdirect to HOme Page/Dashboard
        }
        else
        {
            //User not Available and Login FAil
            //REdirect to Log in page
            echo '<script>alert("Username or Password did not match.");window.location.href="login.php"</script>';
        }
    }
  ?>