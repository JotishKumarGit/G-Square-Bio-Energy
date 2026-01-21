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

  <!--BANNER STARTS -->
  <div class="slider_con">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="images/slider/06.jpg" width="100%" style="height: 800px !important;" alt="">
        </div>
        <div class="item"><img src="images/Briquettes.jpeg" width="100%" style="height: 800px !important;" alt=""></div>
        <div class="item"><img src="images/slider/04.jpg" width="100%" style="height: 800px !important;" alt=""></div>

      </div>
    </div>
  </div>
  </div>
  <!-- BANNER ENDS -->

  <!-- About STARTS -->
  <section class="container">
    <div class="welcome_con ac">
      <h1 class="ttu title1">G-Square Bio Energy</h1>
      <br>
      <small>Established in 2025</small>
      <p>G-Square Bio Energy is a dynamic and forward-thinking company established in 2025 under the leadership of
        Gautam Arwade (Director). With one year of dedicated experience in the bio-energy sector, we specialize in
        manufacturing, exporting, and supplying high-quality bio-energy products. Our core offerings include premium
        Pellets, Briquettes, Charcoal, and Alum for various industrial and domestic applications. We are committed to
        providing eco-friendly energy solutions while maintaining the highest standards of quality and customer
        satisfaction.</p>
      <div class="ac mt30"> <a href="#" class="btn btn-success trans_eff">Read More</a> </div>
    </div>
  </section> <br>
  <!-- About ENDS -->

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
            <img src="images/South-Indian-coal.jpg" alt="South Indian Coal" class="img-responsive center-block">
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
                <textarea class="form-control" rows="5" placeholder="Your Message *" required></textarea>
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