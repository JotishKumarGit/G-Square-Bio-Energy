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
            <li><a href="about.php" style="color: white;">Products</a></li>
            <li class="active"><a href="#">South African Coal</a></li>
        </ul>
    </div>

    <!-- products details -->
    <section class="imported-coal-section">
        <div class="imported-coal-card">
            <!-- Left Side Image -->
            <div class="imported-coal-image">
                <img src="images/South-Indian-coal.jpg" alt="South African Coal">
            </div>

            <!-- Right Side Product Details -->
            <div class="imported-coal-details">
                <h2>South African Coal</h2>

                <p>
                    South African Coal is widely recognized for its balanced calorific value,
                    low ash content, and stable combustion efficiency. It is a preferred choice
                    for power generation and industrial applications due to its consistent
                    quality and cost-effectiveness.
                </p>

                <p><strong>Origin:</strong> South Africa</p>
                <p><strong>Grade:</strong> Medium to High Calorific Value</p>
                <p><strong>Usage:</strong> Power plants, cement industries, boilers, brick kilns</p>

                <button class="imported-coal-btn" onclick="openModal()">Enquiry</button>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>