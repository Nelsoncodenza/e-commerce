<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/compiled.min474a.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/mega-menu.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/preloader.css">
    <title>GlamChic</title>
    <style>
        .navbar-nav .nav-link {
            color: white !important;
        }
        
        .top-nav-collapse .nav-link {
            color: black !important;
        }
        
        #btnNext {
            position: absolute;
            right: 0px;
            top: 230px;
            background-color: white !important;
        }
        
        #btnNext .fa-chevron-right,
        #btnPrev .fa-chevron-left {
            color: black !important;
        }
        
        #btnPrev {
            position: absolute;
            left: 0px;
            top: 230px;
            background-color: white !important;
        }
        
        @media only screen and (max-width:1200px) {
            #megaMenu {
                display: none;
            }
        }
        
        button#comment:hover {
            background-color: #33B5E5;
            color: white !important;
        }
        .scroll-view-up{
            position: fixed;
            top: 8%;
            left: 95%;
            background: white;
            height: 50px;
            width: 50px;
            border: none;
            cursor: pointer;
            transform: translateY(50%);
            z-index: 1000;
            opacity: 0;
        }
        .cart {
            margin-top: 50px;
            position: absolute;
            top: 5%;
            background: #fff;
            width: fit-content;
            left: 68%;
            transform: translateX(150%);
            opacity: 0;
            display: none; 
        }
        .cart-show {
            
            transform: translateX(-5%);
            opacity: 1;
            display: block;
        }
        .cart tr:first-child th {
            text-align: left;
        }
        .cart td:first-child {
            font-weight: 500;
            font-size: 20px;
        }
        .cart i {
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 3px;
            cursor: pointer;
        }
        .cart i:hover {
            transition: all 0.8s ease-out;
            background: #eee;
        }
        .cart-image {
            width: 40px;
            height: 40px;
        }
        .cart-btn-bottom {
            border: 1px solid #ccc;
            padding: 5px;
            background: white;
            border-radius: 3px;
            cursor: pointer;
        }
        .cart-btn-bottom:hover {
        background: #eee;
        }
        #cart-sm {
            position: fixed;
            top: 90vh;
            left: 85%;
            z-index: 5;
        }
        #cart-sm i {
            background: white;
            width: 50px;
            height: 50px;
            font-size: 10px;
            text-align: center;
        }
        #cart-sm i {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <div id="loader" style="background-image: url('<?php echo base_url()?>assets/img/svg/mypreloader.svg')"> </div>
    </div>
    <header>
        <!--Navbar-->
        <?php include_once dirname( __FILE__ ).'/includes/navbar.php' ?>
        <!--Navbar-->
        <div id="mainCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image:url( <?php echo base_url()?>assets/img/intro1.jpg);height:600px; background-position: center;background-repeat: no-repeat">
                    <div class="carousel-view">
                        <div class="carousel-caption  " style="position:absolute; top:30%;color:white">
                            <!-- Content -->
                            <div class="text-left white-text mx-5 wow fadeInLeft" data-wow-delay="1.6s">
                                <h1 class="mb-0">
                                    <strong>Slope hats for you.</strong>
                                </h1>
                                <p>
                                    <strong>Best & free guide of responsive web design</strong>
                                </p>
                                <a href="#" class="btn btn-outline-white  btn-carousel">Get exclusice hats <i class="fa fa-smile-o"></i> </a>
                            </div>
                            <!-- Content -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item " style="background-image:url( <?php echo base_url()?>assets/img/intro3.jpg);height:600px; background-position: center;background-repeat: no-repeat">
                    <div class="carousel-view">
                        <div class="carousel-caption  " style="position:absolute; top:30%;color:white">
                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn mb-4 crsl-content">
                                <h1 class="mb-0">
                                    <strong>Slope hats for you.</strong>
                                </h1>
                                <p>
                                    <strong>Best & free guide of responsive web design</strong>
                                </p>
                                <a href="#" class="btn btn-outline-white  btn-carousel">Get exclusice hats <i class="fa fa-smile-o"></i> </a>
                            </div>
                            <!-- Content -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item " style="background-image:url( <?php echo base_url()?>assets/img/intro2.jpg);height:600px; background-position: center;background-repeat: no-repeat">
                    <div class="carousel-view">
                        <div class="carousel-caption  " style="position:absolute; top:30%;color:white">
                            <!-- Content -->
                            <div class="text-right white-text mx-5 wow fadeInRight mb-4 crsl-content">
                                <h1 class="mb-0">
                                    <strong>Slope hats for you.</strong>
                                </h1>
                                <p>
                                    <strong>Best & free guide of responsive web design</strong>
                                </p>
                                <a href="#" class="btn btn-outline-white  btn-carousel">Get exclusice hats <i class="fa fa-smile-o"></i> </a>
                            </div>
                            <!-- Content -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </header>
    <div id="main" class="">
     <button class="scroll-view-up z-depth-1 rounded-circle z-depth-1"><i class="fa fa-arrow-up"></i></button>
        <div class="cart container">
            <table class="table table-sm">
  <thead>
    <tr>
      <th style="text-align: left;">Product Name</th>
      <th>Quantity</th>
      <th class="text-center">Price</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> <img src="<?php echo base_url('assets/img/D_MEN.jpg') ?>" alt="" class="rounded-circle mr-2 cart-image"> Sharia dress</td>
     <td>
        <i class="fa fa-plus"></i>
        <i class="fa fa-minus"></i>
     </td>

      <td> 
        <div style="font-weight: bold">
            <span style="font-weight: 400">UGX</span>10,000
        </div>
       </td>

      <td><i class="fa fa-trash text-right"/></td>
    </tr>
    <tr>
      <td> <img src="<?php echo base_url('assets/img/D_MEN.jpg') ?>" alt="" class="rounded-circle mr-2 cart-image"> Sharia dress</td>
     <td>
        <i class="fa fa-plus"></i>
        <i class="fa fa-minus"></i>
     </td>

      <td> 
        <div style="font-weight: bold">
            <span style="font-weight: 400">UGX</span>10,000
        </div>
       </td>

      <td><i class="fa fa-trash text-right"/></td>
    </tr>
    <tr>
      <td> <img src="<?php echo base_url('assets/img/D_MEN.jpg') ?>" alt="" class="rounded-circle mr-2 cart-image"> Sharia dress</td>
     <td>
        <i class="fa fa-plus"></i>
        <i class="fa fa-minus"></i>
     </td>

      <td> 
        <div style="font-weight: bold">
            <span style="font-weight: 400">UGX</span>10,000
        </div>
       </td>

      <td><i class="fa fa-trash text-right"/></td>
    </tr>
    <tr>
        <td><button class="cart-btn-bottom">close</button></td>
        <td></td>
        <td></td>
        <td><button class="cart-btn-bottom">Checkout</button></td>
    </tr>
      </tbody>
    </table>
</div>
    <div id="cart-sm" >
    <i class="fa fa-shopping-cart  text-center p-3 z-depth-1 rounded-circle" aria-hidden="true"></i> 
    <span style="font-size: 10px; margin-left: -10px; margin-top: -20px;"class="badge badge-red rounded-circle" >1</span>
    </div>
        <div class="container mt-5">
            <!-- Mega menu -->
            <div class="container-fluid mt-5 pt-3">
                <nav id="megaMenu" class="navbar  navbar-expand-lg navbar-dark mt-5" style="position:absolute;top:525px;left:70px;width:1200px;border-radius: 0px;background-color:#ff4081">
                    <a class="font-bold white-text mr-4" href="#">Categories:</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown mega-dropdown ">
                                <a class="nav-link dropdown-toggle  no-caret" id="dressesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DRESSES</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="dressesMenu">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">DRESSES</h6>
                                            <ul class="caret-style pl-0">
                                                <div class="view overlay hm-white-slight mb-3 z-depth-1">
                                                    <img src="<?php echo base_url('assets/img/D_MEN.jpg') ?>" class="img-fluid" alt="Dresses image">
                                                </div>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">OFFERS</h6>
                                            <ul class="caret-style pl-0">
                                                <label>Up to 70% Off Everthing Include Sales</label>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">DRESSsES STYLE</h6>
                                            <ul class="caret-style pl-0">
                                                <li class=""><a class="menu-item" href="#">All Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">New In Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Mini Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Bridesmaid Dresses</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                            <h6 class="sub-title font-up font-bold pink-text">COLLECTIONS</h6>
                                            <ul class="caret-style pl-0">
                                                <li class=""><a class="menu-item" href="#">Wedding Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Going Out Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Party Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Prom Dresses</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle  no-caret" id="topDresses" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TOP WEAR</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="topDresses">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">DRESSES</h6>
                                            <ul class="caret-style pl-0">
                                                <div class="view overlay hm-white-slight mb-3 z-depth-1">
                                                    <img src="<?php echo base_url('assets/img/D_MEN.jpg') ?>" class="img-fluid" alt="Dresses image">
                                                </div>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">OFFERS</h6>
                                            <ul class="caret-style pl-0">
                                                <label>Up to 70% Off Everthing Include Sales</label>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">DRESSES STYLE</h6>
                                            <ul class="caret-style pl-0">
                                                <li class=""><a class="menu-item" href="#">All Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">New In Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Mini Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Bridesmaid Dresses</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                            <h6 class="sub-title font-up font-bold pink-text">COLLECTIONS</h6>
                                            <ul class="caret-style pl-0">
                                                <li class=""><a class="menu-item" href="#">Wedding Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Going Out Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Party Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Prom Dresses</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle  no-caret" id="bottomWear" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BOTTOM WEAR</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="bottomWear">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">DRESSES</h6>
                                            <ul class="caret-style pl-0">
                                                <div class="view overlay hm-white-slight mb-3 z-depth-1">
                                                    <img src="<?php echo base_url('assets/img/D_MEN.jpg') ?>" class="img-fluid" alt="Dresses image">
                                                </div>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">OFFERS</h6>
                                            <ul class="caret-style pl-0">
                                                <label>Up to 70% Off Everthing Include Sales</label>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">DRESSES STYLE</h6>
                                            <ul class="caret-style pl-0">
                                                <li class=""><a class="menu-item" href="#">All Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">New In Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Mini Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Bridesmaid Dresses</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                            <h6 class="sub-title font-up font-bold pink-text">COLLECTIONS</h6>
                                            <ul class="caret-style pl-0">
                                                <li class=""><a class="menu-item" href="#">Wedding Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Going Out Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Party Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Prom Dresses</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle  no-caret" id="othersMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OTHERS</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="othersMenu">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">DRESSES</h6>
                                            <ul class="caret-style pl-0">
                                                <div class="view overlay hm-white-slight mb-3 z-depth-1">
                                                    <img src="<?php echo base_url('assets/img/D_MEN.jpg') ?>" class="img-fluid" alt="Dresses image">
                                                </div>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">OFFERS</h6>
                                            <ul class="caret-style pl-0">
                                                <label>Up to 70% Off Everthing Include Sales</label>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                            <h6 class="sub-title font-up font-bold pink-text">DRESSES STYLE</h6>
                                            <ul class="caret-style pl-0">
                                                <li class=""><a class="menu-item" href="#">All Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">New In Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Mini Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Bridesmaid Dresses</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                            <h6 class="sub-title font-up font-bold pink-text">COLLECTIONS</h6>
                                            <ul class="caret-style pl-0">
                                                <li class=""><a class="menu-item" href="#">Wedding Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Going Out Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Party Dresses</a></li>
                                                <li class=""><a class="menu-item" href="#">Prom Dresses</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </nav>
            </div>
            <!-- Mega menu -->
            <div id="whyus">
            <section id="features" class="section feature-box mb-3 mt-1 pt-4 pb-3">
                <div  class="divider-new mt-0 mb-0">
                    <h2 class="h2-responsive font-weight-bold">WHY CHOOSE US? </h2>
                </div>
                <p class="section-description mb-5 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda
                </p>
                <div class="row features-big">
                    <div class="col-md-4 mb-1 mt-1">
                        <i class="fa fa-cubes" style="color:#ff4081"></i>
                        <h5 class="feature-title">Perfection</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <div class="col-md-4 mb-1 mt-1">
                        <i class="fa fa-truck" style="color:#ff4081"></i>
                        <h5 class="feature-title">Free Delivery</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <div class="col-md-4 mb-1 mt-1">
                        <i class="fa fa-magic" style="color:#ff4081"></i>
                        <h5 class="feature-title">Flexibility</h5>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                </div>
            </section>
            </div>
        </div>

        <div id="topcategories">
        <div class="row w-100">
            <div class="col-12">
                <div class="divider-new mt-0 mb-0">
                    <h2 class="h2-responsive font-weight-bold">OUR TOP CATEGORIES</h2>
                </div>
            </div>
        </div>
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" data-pause="false">
            <!--Controls-->
            <div class="controls-top">
                <a class="btn-floating" id="btnPrev" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="btn-floating" id="btnNext" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->
            <div class="container-fluid">
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Ladies' Dresses</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Sharias & Bitenji</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Top Wear</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item ">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Ladies' Dresses</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Sharias & Bitenji</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Top Wear</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item ">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Ladies' Dresses</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Sharias & Bitenji</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/carousel1.jpg') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Top Wear</h4>
                                    <p class="card-text">Elegant, durable and affordable.</p>
                                    <a class="btn btn-primary py-2 px-3">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Third slide-->

                </div>
            </div>
        </div>
        </div>
        <!--/.Carousel Wrapper-->

<div id="contact">
        <div class="mt-5 streak streak-photo streak-md hm-black-strong" style="background-image:url( <?php echo base_url()?>assets/img/4.jpg)">
            <div class="flex-center white-text mask ">
                <div class="row w-100">
                    <div class="col-12 d-flex" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.4em; flex-direction: column;">
                        <h2 class="h2-responsive mx-auto  fadeInDown">You’ve got questions now?</h2>
                        <hr style="border: 1.6px solid tomato;width:80px">
                        <i class="text-center  fadeInUp" style="font-size: .9em;font-weight: lighter">
                            Please Click the button below to leave us a message and we shall be Glad to reply</i>
                    </div><button id="comment" class=" mt-4 btn btn-outline-pink d-inline mx-auto  fadeInUp">WRITE TO US</button>
                </div>
            </div>
        </div>
        </div>

        
        <div class="container" style="margin-bottom:25px;">
            <section class="mb-5 container-items">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 pt-4">
                        <hr>
                        <h5 class="font-bold dark-grey-text"><strong>New Products</strong></h5>
                        <hr>
                        <div class="row mt-5 py-2 mb-4 hoverable align-items-center">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/new.jpg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                        <div class="row mt-2 py-2 mb-4 hoverable mini-product">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/new.jpg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                        <div class="row mt-2 py-2 pb-1 hoverable align-items-center">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/new.jpg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-12 pt-4">
                        <hr>
                        <h5 class="font-bold dark-grey-text"><strong>Top Sellers</strong></h5>
                        <hr>
                        <div class="row mt-5 py-2 mb-4 hoverable align-items-center">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/top-sellers.jpg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                        <div class="row mt-2 py-2 mb-4 hoverable mini-product">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/top-sellers.jpg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                        <div class="row mt-2 py-2 pb-1 hoverable align-items-center">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/top-sellers.jpg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 pt-4">
                        <hr>
                        <h5 class="font-bold dark-grey-text"><strong>Random Products</strong></h5>
                        <hr>
                        <div class="row mt-5 py-2 mb-4 hoverable align-items-center">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/random.jpeg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                        <div class="row mt-2 py-2 mb-4 hoverable mini-product">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/random.jpeg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                        <div class="row mt-2 py-2 pb-1 hoverable align-items-center">
                            <div class="col-6">
                                <a><img src="<?php echo base_url('assets/img/random.jpeg') ?>" class="img-fluid" ></a>
                            </div>
                            <div class="col-6">
                                <a class="pt-5"><strong>Ladies' scalfs</strong></a>
                                <h6 class="h6-responsive font-bold dark-grey-text"><strong>UGX 14,000</strong></h6>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--/Section: product list-->
        </div>

        <div id="offers">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row w-100 mb-0 mt-4">
                    <dv class="col-12 text-center">
                        <h3><strong>DISCOUNTS</strong></h3>
                    </dv>
                </div>
                <div class="row w-100">
                    <div class="col-12 mt-2 mb-5" style="height:180px;width: 100%; overflow:hidden">
                        <nobr id="lastItems">
                            <!--NAVIGATION BUTTONS-->
                            <div style="width:30px;height:170px;position:absolute;right:0px;top:0px;background-color: white;z-index: 2">
                                <i class="fa fa-chevron-circle-right" id="next" aria-hidden="true" style="position:absolute;right:10%;top:40%;font-size: 30px;cursor:pointer; color:grey"></i>
                            </div>
                            <div style="width:30px;height:170px;position:absolute;left:0px;top:0px;background-color: white;z-index: 2">
                                <i class="fa fa-chevron-circle-left" id="prev" aria-hidden="true" style="position:absolute;right:10%;top:40%;font-size: 30px;cursor:pointer; color:grey"></i>
                            </div>
                            <!--NAVIGATION BUTTONS-->
                            <div class="card mr-2 ml-5 z-depth-1" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Checked vest</a></strong></h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 325,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Long Sleeves</a></strong></h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 115,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Stockings</a></strong></h5>
                                    <span class="badge badge-success mb-2">Discount</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 35,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Head Gears</a></strong></h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star-empty pink-text"></i></li>
                                        <li><i class="fa fa-star-half pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 25,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Long Sleeves</a></strong></h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 115,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Stockings</a></strong></h5>
                                    <span class="badge badge-success mb-2">Discount</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 35,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Head Gears</a></strong></h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star-empty pink-text"></i></li>
                                        <li><i class="fa fa-star-half pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 25,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Long Sleeves</a></strong></h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 115,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Stockings</a></strong></h5>
                                    <span class="badge badge-success mb-2">Discount</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 35,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Head Gears</a></strong></h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star-empty pink-text"></i></li>
                                        <li><i class="fa fa-star-half pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 25,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Long Sleeves</a></strong></h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 115,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Stockings</a></strong></h5>
                                    <span class="badge badge-success mb-2">Discount</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 35,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mx-2" style="display:inline-block">
                                <div class="card-body text-left">
                                    <h5 class="card-title mb-1"><strong><a href="#" class="dark-grey-text">Head Gears</a></strong></h5>
                                    <span class="badge badge-info mb-2">discount</span>
                                    <ul class="rating">
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star pink-text"></i></li>
                                        <li><i class="fa fa-star-empty pink-text"></i></li>
                                        <li><i class="fa fa-star-half pink-text"></i></li>
                                    </ul>
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="left"><strong>UGX 25,000</strong></span>
                                            <span class="right">                                               
                              <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-shopping-cart"></i></a>
                              </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </nobr>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-bold">Write to us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="form3" class="form-control">
                        <label for="form3">Your name</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="form2" class="form-control">
                        <label for="form2">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="text" id="form32" class="form-control">
                        <label for="form34">Subject</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-pencil prefix grey-text"></i>
                        <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
                        <label for="form8">Your message</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-pink">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <?php include_once dirname( __FILE__ ).'/includes/footer.php' ?>
    <!--Footer-->
</body>
<script src="<?php echo base_url()?>assets/js/compiled.min474a.js"></script>
<script src="<?php echo base_url()?>assets/js/preloader.js"></script>
<script>
    $(document).ready(function() {
            //Animation init
            var wow = new WOW({
                mobile: false // Disable animations on mobile phones
            });
            wow.init();
            $('.navbar-toggler').click(function() {
                $('.navbar').toggleClass('mobile-dropdown');
            })
            $("button#comment").click(function() {
                $('#contactModal').modal();
            })
        })
        //By default, hide previous button as there is nothing to slide backward to
    $("#prev").fadeOut();
    //When user hovers on an item while its sliding, stop sliding it
    $("#lastItems .card").mouseover(function() {
        $("#lastItems").stop();
    })

    //When the next button on the slider is pressed......
    $("#next").click(function() {
            $("#lastItems").stop();
            slideLastItems("last", 1110, "-=850px");
        })
        //When the previous button on the slider is pressed......
    $("#prev").click(function() {
        if ($("#lastItems .card").first().position().left < 15) {
            $("#lastItems").stop();
            slideLastItems("first", 15, "+=850px");
        }
    })


    window.onscroll = ()  =>{
        const scrollBtn = document.querySelector(".scroll-view-up") 
        scrollBtn.onclick = () => document.documentElement.scrollTo(0,10)
        if(window.scrollY >= 1340) {
            scrollBtn.style.cssText = `
            transform: translateY(0);
            opacity: 1;
            `;
        } else {
            scrollBtn.style.cssText = `
            opacity: 0;
            transform: translateY(50%);
            `;
        }
    }
    $("#cart-toggler").click(function() {
        document.querySelector('.cart').classList.toggle('cart-show')
    })
    function slideLastItems(position, limit, slide_length) {
        var left_Limit = limit;
        $("#lastItems").animate({
            marginLeft: slide_length
        }, {
            duration: 8500,
            start: function() {
                $("#prev").fadeIn(2000);
                $("#next").fadeIn(2000);

            },
            progress: function() {
                if (position == "first") {
                    if ($("#lastItems .card").first().position().left > left_Limit) {
                        $("#lastItems").stop();
                        $("#prev").fadeOut();
                    }

                } else if (position == "last") {
                    if ($("#lastItems .card").last().position().left < left_Limit) {
                        $("#next").fadeOut();
                        $("#lastItems").stop();
                    }
                }
            }
        });
    }
</script>

</html>