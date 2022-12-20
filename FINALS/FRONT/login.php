<?php include('subfiles/connect-db.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form Using HTML And CSS Only</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background-image: url('subfiles/images/bg-pic.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #1e90ff;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        a:hover {
            color: #3742fa;
        }

        .button {
            border-radius: 20px;
            border: 1px solid #ff7f50;
            background-color: #ff7f50;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }
        .button:hover{
            border: 1px solid #ff6348;
            background-color: #ff6348;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
        }

        .log-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }


        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
        }


        .overlay {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            left: -100%;
            height: 100vh;
            width: auto;
            overflow: hidden;
            display: flex;
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            width: 50vh;
            height: 70%;
            object-fit: fill;
            left: 0px;
            right: 0;
            top: 8vh;
            bottom: 0;
        }


        .overlay-right {
            right: 0;
        }


        .social-container {
            margin: 50px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
    </style>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="POST">
				<h1>Login</h1>
				<input type="text" placeholder="Username" name="username" required/>
				<input type="password" placeholder="Password" name="password" required/>
				<a href="#">Forgot password?</a>
				<div>
                    <input type="submit" name="submit" value="Login" class="button">
                </div>
                <div>
                    <span>
                        <p>No Account? <br>
                        <a href="signup.php">Create One!</a></p>
                    </span>
                </div>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
                    <video autoplay muted loop>
                        <source src="subfiles/images/vid.mp4" type="video/mp4" alt="video">
                    </video>
				</div>
			</div>
		</div>
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
    $password = md5($raw_password);
    
    //2. SQL to check whether the user with username and password exists or not
    $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

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