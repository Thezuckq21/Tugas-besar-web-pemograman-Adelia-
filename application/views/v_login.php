<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= base_url('assets/img/MAS123.png'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>       
    <title>Screamous</title>
    <!-- My CSS -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url('assets/css/login_style.css'); ?>">
    <!-- My jQuery -->
    

</head>

<body>
    <!-- NAVBAR -->
 <?php include 'kepala.php';?>
    <!-- MAIN CONTENT -->

    <div class="jumbotron jumbotron-fluid bg-white">
        <div class="container"> 
            <div class="row justify-content-center">
                <div class="col-md-5 ws-home-check-left">
                    <form action="#" class="ws-form form-horizontal check-form " method="post">
                        <div class="pt-5 text-center pb-5 ">
                           Login
                        </div>

                       <head>
                            <style> 
                            input[type=text] {
                              width: 100%;
                              padding: 12px 20px;
                              margin: 8px 0;
                              box-sizing: border-box;
                            }
                            </style>
                            </head>
                            <body>
                            <form action="<?php echo site_url('Logincustomer/Signin'); ?>" method="POST" class="" id="login-form" >
                              <a for="Email">Email</a>
                              <input type="text" id="Email" name="Email" required/>
                              <a for="pass">Password</a>
                              <input type="text" id="pass" name="pass" required/>
                              <li class="nav-item">
                              <a class="nav-link" herf="<?= base_url('scrm/index'); ?>">Sign In</a></li>
                            </form>
                            <li class="nav-item">
                               <a class="nav-link" herf="<?= base_url('scrm/registrasi'); ?>">Sign Up</a></li>
                            </body>

                        </div>
                    </form>       
                </div>   
            </div> 
        </div>         
        </div>
    </div>
    <!-- FOOTER  -->