<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="shortcut icon" href="<?= base_url('assets/img/MAS123.png'); ?>">
    <title>Screamous</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/ongkir_style.css'); ?>">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/logo-header.png'); ?>" width="150px;" class="main-logo img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> CHOOSE CATEGORY</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">T SHIRT</a>
                            <a class="dropdown-item" href="#">SWEATER</a>
                            <a class="dropdown-item" href="#">SHORT</a>
                            <a class="dropdown-item" href="#">SHIRT</a>
                            <a class="dropdown-item" href="#">PANTS</a>
                            <a class="dropdown-item" href="#">ACCESSORIES</a>
                            <a class="dropdown-item" href="#">JACKET</a>
                          </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/cekresi'); ?>">PAYMENT CONFRIMATION </a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link" href="<?= base_url('Sicepat/ongkir'); ?>">BLOG </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/service'); ?>">SIDE GUIDE </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="jumbotron jumbotron-fluid bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 ws-home-check-left">
                    <form action="#" class="ws-form form-horizontal check-form " method="post">
                        <div class="pt-5 text-center ">
                            <img class="check-fee-icon" src="<?= base_url('assets/img/cek-ongkir@2x.png') ?>" style="margin-right: 17px; margin-bottom: 4px;">Cek Tarif
                        </div>
                        <div class="form-group row pt-4 ">
                                <label class="col-sm-2 col-form-label ">Asal</label>
                                <div class="col-sm-10">
                                    <input id="origin" type="text" value="" name="origin" class="form-control px-2" placeholder="Select province" autocomplete="off">
                                </div>
                            </div>
                            <input id="origin_code" type="hidden" value="" name="origin_code" class="form-control">

                            <div class="form-group row ">
                                <label class=" col-sm-2  control-label  ">Tujuan</label>
                                <div class="col-sm-10">
                                    <input id="destination" type="text" value="" name="destination" class="form-control" placeholder="Select province" autocomplete="off">
                                </div>
                            </div>
                            <input id="destination_code" type="hidden" value="" name="destination_code" class="form-control">

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Berat</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" name="weight" class="form-control" placeholder="00">
                                        <div class="input-group-prepend ">
                                        <span class="input-group-text bg-white">Kg</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Dimensi</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="length" class="form-control" placeholder="L">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">cm</span>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="width" class="form-control" placeholder="W">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">cm</span></div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="height" class="form-control" placeholder="H">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-white">cm</span>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right"><a id="btn-check" name="btn-check" class=" btn btn-check" href="javascript:void(0)">Cek Harga</a>
                                </div>
                            </div>
                            
                    </form>
                </div>
            </div>
        </div>
                    <div class="container awb-result" id="awb-result"></div>   
                    <img src="<?= base_url('assets/img/background2.png'); ?>" class="img-responsive" style="width:100% !important; opacity:0.7;">
    </div>

    

                                    
    

    <!-- FOOTER  -->

