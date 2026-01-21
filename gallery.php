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
            <li class="active"><a href="#">Our Gallery</a></li>
        </ul>
    </div>

    <!--  GALLERY STARTS -->
    <section class="product_gallery_con mt40">
        <div class="container ac">
            <h1 class="ttu title1">Product Gallery</h1>
            <div class="row mt40">

                <!-- 1 -->
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="gallery-item trans_eff">
                        <img src="images/Charcoal.jpg" alt="" class="img-responsive center-block">
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="gallery-item trans_eff">
                        <img src="images/Briquettes.jpeg" alt="" class="img-responsive center-block">
                    </div>
                </div>
                <!-- 5 -->
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="gallery-item trans_eff">
                        <img src="images/slider/04.jpg" alt="" class="img-responsive center-block">
                    </div>
                </div>
                <!-- 7 -->
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="gallery-item trans_eff">
                        <img src="images/US-Coal.jpeg" alt="US Coal" class="img-responsive center-block">
                    </div>
                </div>
                <!-- 8 -->
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="gallery-item trans_eff">
                        <img src="images/South-Indian-coal.jpg" alt="South Indian Coal"
                            class="img-responsive center-block">
                    </div>
                </div>
                <!-- 9 -->
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="gallery-item trans_eff">
                        <img src="images/Indonesian-Coal.jpg" alt="Indonesian Coal" class="img-responsive center-block">
                    </div>
                </div>
                <!-- 10 -->
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="gallery-item trans_eff">
                        <img src="images/Indian-Coal.jpg" alt="Indian Coal" class="img-responsive center-block">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  GALLERY ENDS -->

      <!-- footer -->
  <?php include('footer.php') ?>