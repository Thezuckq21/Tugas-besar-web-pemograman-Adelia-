 <link href="http://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet" type="text/css" media="all" />
 <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-black">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url('assets/img/logopala.png')?>" width="100%;" class="main-logo img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> CHOOSE CATEGORY</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('scrm/tshirt'); ?>">T SHIRT</a>
                            <a class="dropdown-item" href="#">SWEATER</a>
                            <a class="dropdown-item" href="<?= base_url('scrm/short'); ?>">SHORT</a>
                            <a class="dropdown-item" href="#">SHIRT</a>
                            <a class="dropdown-item" href="#">PANTS</a>
                            <a class="dropdown-item" href="#">ACCESSORIES</a>
                            <a class="dropdown-item" href="<?= base_url('scrm/jaket'); ?>">JACKET</a>
                          </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSefQ5VnFUHHNQzQEQxqlTxOxvyufuy-TRMj5i3llpOS7pTpmQ/viewform">PAYMENT CONFRIMATION </a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link" href="<?= base_url('scrm/cekresi'); ?>">BLOG </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('scrm/service'); ?>">SIDE GUIDE </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('scrm/login'); ?>">LOGIN </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('scrm/service'); ?>">CART </a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>