<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome to G-Square Bio Energy</title>
    <!--===========css==============-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conditional.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* STICKY HEADER FIX */
        body {
            padding-top: 160px !important;
        }

        header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            z-index: 9999 !important;
            background: white !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
        }

        .slider_con {
            margin-top: -160px !important;
            position: relative !important;
        }

        /* Mobile fix */
        @media (max-width: 768px) {
            body {
                padding-top: 140px !important;
            }

            .slider_con {
                margin-top: -140px !important;
            }
        }
    </style>

</head>

<body id="home">

    <!-- header -->
    <?php include('header.php') ?>

    <!-- bread crumb -->
    <div class="breadcrumb-container">
        <ul class="breadcrumb">
            <li><a href="index.php" style="color: white;">Home</a></li>
            <li class="active"><a href="#">About Us</a></li>
        </ul>
    </div>

    <!-- About STARTS -->
    <section class="container">
        <div class="welcome_con ac">
            <h1 class="ttu title1">G-Square Bio Energy</h1>
            <br>
            <small>Established in 2025</small>
            <p>G-Square Bio Energy is a dynamic and forward-thinking company established in 2025 under the leadership of
                Gautam Arwade (Director). With one year of dedicated experience in the bio-energy sector, we specialize
                in
                manufacturing, exporting, and supplying high-quality bio-energy products. Our core offerings include
                premium
                Pellets, Briquettes, Charcoal, and Alum for various industrial and domestic applications. We are
                committed to
                providing eco-friendly energy solutions while maintaining the highest standards of quality and customer
                satisfaction.</p>
            <div class="ac mt30"> <a href="#" class="btn btn-success trans_eff">Read More</a> </div>
        </div>
    </section><br>
    <!-- About ENDS -->

    <!-- Clients -->
    <section class="presence_con">
        <div class="container">
            <h1 class="title2 ac ttu">Our Clients </h1>
            <ul class="mt40">
                <li>
                    <div class="inner">
                        <figure><i class="fa icon1"></i></figure>
                        <figcaption>
                            <h3>India</h3>
                            <p>All State</p>
                        </figcaption>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure> <i class="fa icon2"></i> </figure>
                        <figcaption>
                            <h3>India</h3>
                            <p>All City</p>
                        </figcaption>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure> <i class="fa icon3"></i> </figure>
                        <figcaption>
                            <h3><span class="count">100</span><small>+</small></h3>
                            <p>Clients</p>
                        </figcaption>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure> <i class="fa icon4"></i> </figure>
                        <figcaption>
                            <h3 id="circle"><span class="count">24</span><small class="white">/7</small></h3>
                            <p>Support</p>
                        </figcaption>
                    </div>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </section>
    <!-- Clients ENDS -->

    <!-- footer -->
    <?php include('footer.php') ?>