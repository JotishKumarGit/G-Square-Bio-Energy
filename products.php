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
            <li class="active"><a href="#">Our Products</a></li>
        </ul>
    </div>

    <!-- OUR PRODUCTS STARTS -->
    <section class="products_con">
        <div class="container ac">
            <h1 class="ttu title1">Our Products</h1>
            <p class="subtitle">
                High-quality fuels and industrial materials for reliable performance
            </p>

            <div class="row mt40">

                <!-- Imported Coal -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-card trans_eff h-100">
                        <figure class="product-img">
                            <img src="images/Imported-coal.jpeg" alt="Imported Coal" class="img-responsive">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="Imported-Coal.php" class="btn btn-success">View Details</a>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h3>Imported Coal</h3>
                            <p>
                                Premium-quality imported coal with superior calorific value,
                                suitable for heavy industrial applications.
                            </p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> High CV</span>
                                <span><i class="fa fa-check"></i> Low Moisture</span>
                                <span><i class="fa fa-check"></i> Consistent Quality</span>
                            </div>
                            <button onclick="openModal()" class="btn btn-success mt10">Enquiry
                                Now</button>
                        </div>
                    </div>
                </div>

                <!-- Fuel Briquettes -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-card trans_eff h-100">
                        <figure class="product-img">
                            <img src="images/Briquettes.jpeg" alt="Fuel Briquettes" class="img-responsive">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="Fuel-Briquettes.php" class="btn btn-success">View Details</a>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h3>Fuel Briquettes</h3>
                            <p>
                                Eco-friendly biomass briquettes designed for efficient and
                                clean-burning energy solutions.
                            </p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Renewable Fuel</span>
                                <span><i class="fa fa-check"></i> Low Ash</span>
                                <span><i class="fa fa-check"></i> Cost Effective</span>
                            </div>
                            <a href="#" onclick="openModal()" class="btn btn-success mt10">Enquiry Now</a>
                        </div>
                    </div>
                </div>

                <!-- Biomass Pellet -->
                <div class="col-md-4 col-sm-6 col-xs-12 d-flex">
                    <div class="product-card trans_eff h-100">
                        <figure class="product-img">
                            <img src="images/slider/04.jpg" alt="Biomass Pilot Plant" class="img-responsive">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="Biomass-Pilot.php" class="btn btn-success">View Details</a>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h3>Biomass Pellet</h3>
                            <p>
                                Advanced biomass Pellet plant designed for testing, research,
                                and optimization of renewable energy generation from organic waste.
                            </p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Renewable Energy</span>
                                <span><i class="fa fa-check"></i> Pilot Scale Testing</span>
                                <span><i class="fa fa-check"></i> Eco-Friendly Solution</span>
                            </div>
                            <a href="#" onclick="openModal()" class="btn btn-success mt10">Enquiry Now</a>
                        </div>
                    </div>
                </div>

                <!-- Indian Coal -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-card trans_eff h-100">
                        <figure class="product-img">
                            <img src="images/Indian-Coal.jpg" alt="Indian Coal" class="img-responsive">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="Indian-Coal.php" class="btn btn-success">View Details</a>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h3>Indian Coal</h3>
                            <p>
                                Reliable and economical coal sourced from India, widely used
                                in power plants and manufacturing units.
                            </p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Cost Efficient</span>
                                <span><i class="fa fa-check"></i> Steady Combustion</span>
                                <span><i class="fa fa-check"></i> Industrial Use</span>
                            </div>
                            <a href="#" onclick="openModal()" class="btn btn-success mt10">Enquiry Now</a>
                        </div>
                    </div>
                </div>

                <!-- US Coal -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-card trans_eff h-100">
                        <figure class="product-img">
                            <img src="images/US-Coal.jpeg" alt="US Coal" class="img-responsive">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="US-Coal.php" class="btn btn-success">View Details</a>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h3>US Coal</h3>
                            <p>
                                High-calorific American coal known for low ash content and
                                efficient energy output.
                            </p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Low Ash</span>
                                <span><i class="fa fa-check"></i> High Efficiency</span>
                                <span><i class="fa fa-check"></i> Premium Quality</span>
                            </div>
                            <a href="#" onclick="openModal()" class="btn btn-success mt10">Enquiry Now</a>
                        </div>
                    </div>
                </div>

                <!-- South African Coal -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-card trans_eff h-100">
                        <figure class="product-img">
                            <img src="images/South-Indian-coal.jpg" alt="South Indian Coal" class="img-responsive">
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <a href="South-African-Coal.php" class="btn btn-success">View Details</a>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h3>South African Coal</h3>
                            <p>
                                Regionally sourced coal offering dependable performance for
                                small to medium industrial requirements.
                            </p>
                            <div class="product-features">
                                <span><i class="fa fa-check"></i> Stable Burning</span>
                                <span><i class="fa fa-check"></i> Easy Availability</span>
                                <span><i class="fa fa-check"></i> Industrial Grade</span>
                            </div>
                            <a href="#" onclick="openModal()" class="btn btn-success mt10">Enquiry Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- OUR PRODUCTS ENDS -->

     <!-- footer -->
  <?php include('footer.php') ?>