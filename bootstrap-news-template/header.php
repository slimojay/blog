<?php 
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
include('controller/BlogHandler.php');
$app = new BlogHandler();
$app->uniqueUsers('ips');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        @media screen and (min-width : 468px){
            #uni{
            
                margin-right:220px;
                font-weight:800;
                background-color:white;
            }
            #rr{
                margin-left:10%;
            }
            #dv1, #dv2{
                margin-left:40px;
            }
        }
        </style>
        <meta charset="utf-8">
        <title>Open Blog Post : Your Number One Lastest News Blog</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar" style='background-color:white'>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>ojiodujoachim@mail.com</p>
                            <p><a href='tel:09091201994'><i class="fas fa-phone-alt"></i>+234 909 120 1994</a></p>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="tb-menu">
                            <a href="" >About</a>
                            <a href="">Privacy</a>
                            <a href="">Terms</a>
                            <a href="">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="b-logo">
                            <a href="index">
                               <!-- <img src="img/logo.png" alt="Logo"> -->
                               <h1>OPEN BLOG <span style='color:PINK'>POST</span></h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4" style='display:none'>
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="img/ads-1.jpg" alt="Ads">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 align-right">
                        <div class="b-search">
                            <input type="text" placeholder="Search" class='disabled'>
                            <button><i class="fa fa-search"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar bg-dark" style='background-color:black !important'>
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark" style='padding:5px'>
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" 
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between bg-dark" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog Areas</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Sports</a>
                                    <a href="#" class="dropdown-item">Entertainment</a>
                                </div>
                            </div>
                            
                            <a href="create" class="nav-item nav-link">Create Blog Post</a>
                        </div>
                       <p class='text-white' style='margin-left:50px; margin-top:8px'> Unique Viewers &nbsp &nbsp <i class='fa fa-arrow-right text-white'></i></p>
                        <div class="social ml-auto">
                            
                              <a href='' class='text-dark' id='uni'><?php echo $app->getUniqueViewers('ips'); ?> </a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>