<?php 

    include('connect-db.php'); 
    // include('login-check.php');

?>


<html>
    <head>
        <title>MARTHA'S KITCHEN</title>
        <link rel="stylesheet" href="subfiles/admin.css">
    <style>
        /* CSSS for navbar section */
        .logo{
            width: 15%;
            margin-top: 5px;
            float: left;
        }
        .menu{
            line-height: 60px;
        }
        .menu ul{
            list-style-type: none;
        }

        .menu ul li{
            display: inline;
            padding: 1%;
            font-weight: bold;
        }


        /* css for footer */
        .footer{
            background-color: #ff4757;
            color: white;
        }

        /* CSS for Mobile Size or Smaller Screen */

        @media only screen and (max-width:768px){
            .logo{
                width: 80%;
                float: none;
                margin: 1% auto;
            }

            .menu ul{
                text-align: center;
            }
        }
    </style>
    </head>

    <body>
        <!----Menu Section--->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="subfiles/logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-admin.php">Admin</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
        <!----End ng Menu Section-->