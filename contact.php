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
            <li class="active"><a href="#">Contact Us</a></li>
        </ul>
    </div>


    <!-- CONTACT US STARTS -->
    <section class="contact_us_con mt40">
        <div class="container">
            <h1 class="ttu title1 ac">Contact Us</h1>
            <div class="row mt40">
                <!-- Left Column - Get In Touch & Company Info -->
                <div class="col-md-6">
                    <div class="contact_info">
                        <h3 class="ttu">Get In Touch</h3>
                        <div class="contact_details mt20">
                            <p><i class="fa fa-map-marker"></i> <strong>Address:</strong><br>
                                Shop No. 107, 1st Floor, Siddarth Arcade,<br>
                                Station Road, Aurangabad,<br>
                                Maharashtra, India - 431001
                            </p>

                            <p class="mt15"><i class="fa fa-phone"></i> <strong>Phone:</strong><br>
                                9449045440 / 9371444466
                            </p>

                            <p class="mt15"><i class="fa fa-envelope"></i> <strong>Email:</strong><br>
                                info@g-squarebioenergy.com
                            </p>

                            <p class="mt15"><i class="fa fa-id-card"></i> <strong>GST No.:</strong><br>
                                27ABDFG6964Z1E
                            </p>

                            <p class="mt15"><i class="fa fa-user"></i> <strong>Contact Person:</strong><br>
                                Gautam Arwade (Director)
                            </p>

                            <p class="mt15"><i class="fa fa-clock-o"></i> <strong>Business Hours:</strong><br>
                                Monday - Saturday: 9:00 AM - 6:00 PM<br>
                                Sunday: Closed
                            </p>
                        </div>

                        <div class="social_icons mt30">
                            <h4>Follow Us</h4>
                            <div class="social_links mt10">
                                <a href="#" class="trans_eff" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="trans_eff" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="trans_eff" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="trans_eff" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" class="trans_eff" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Send Us a Message -->
                <div class="col-md-6">
                    <div class="contact_form">
                        <h3 class="ttu">Send Us a Message</h3>
                        <form class="mt20" id="whatsappForm">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" required>
                            </div>

                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone Number">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Your Message *"
                                    required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg trans_eff">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> <br>
    <!-- CONTACT US ENDS -->


    <!-- footer -->
    <?php include('footer.php') ?>