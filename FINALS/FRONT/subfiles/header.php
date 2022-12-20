<?php 
    include('subfiles/connect-db.php');
    include('login-check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="subfiles/css/style.css">
    <title>Martha's Kitchen</title>

</head>
<body>

    <!-- BASTA NAVBAR KADI -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="subfiles/images/logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu">
                <ul class="text-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="nav-menu.php">Menu</a></li>
                    <!--li><a href="cart.php">Cart</a></li-->
                </ul>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><b><?php echo $_SESSION['user']; ?></b></button>
                <div class="dropdown-content">
                    <a href="">View Profile</a>
                    <a href="orders.php">Orders</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- END NG NAVBAR-->