
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Hao | home</title>

    <!-- Bootstrap core CSS -->
    <link href="landing_page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="landing_page/assets/css/fontawesome.css">
    <link rel="stylesheet" href="landing_page/assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="landing_page/assets/css/animated.css">
    <link rel="stylesheet" href="landing_page/assets/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="#" class="logo"><img            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="#" class="active">Home</a></li>
              <li><a href="#">Listing</a></li>
              <li><a href="#">View Bookings</a></li>             
              <li><div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your Listing</a></div></li> 
            </ul> 
            <a href="<?php echo site_url('user_login'); ?>"><span class="material-symbols-outlined">account_circle</span><?php echo session('user_session'); ?></a>
    
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6>Over 36,500+ Active Listings</h6>
            <h2>Find Nearby Places &amp; Things</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                          <option selected>All Areas</option>
                          <option value="New Village">New Village</option>
                          <option value="Old Town">Old Town</option>
                          <option value="Modern City">Modern City</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                          <option selected>Price Range</option>
                          <option value="$100 - $250">$100 - $250</option>
                          <option value="$250 - $500">$250 - $500</option>
                          <option value="$500 - $1000">$500 - $1,000</option>
                          <option value="$1000+">$1,000 or more</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3">                        
                  <fieldset>
                      <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>

  <div class="recent-listing">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Recent Listing</h2>
            <h6>Check Them Out</h6>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-carousel owl-listing">
            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>1. First Apartment Unit</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(18) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $450 - $950 / month with taxes</span>
                      <span class="details">Details: <em>2760 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 4 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 4 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-02.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>2. Another House of Gaming</h4></a>
                      <h6>by: Top Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $1,400 - $3,500 / month with taxes</span>
                      <span class="details">Details: <em>3650 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 4 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>3. Secret Place Hidden House</h4></a>
                      <h6>by: Best Property</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(36) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $1,500 - $3,600 / month with taxes</span>
                      <span class="details">Details: <em>5500 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 4 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>4. Sunshine Fourth Apartment</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $3,600 / month with taxes</span>
                      <span class="details">Details: <em>3660 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 5 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>5. Best House Of the Town</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(32) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $5,600 / month with taxes</span>
                      <span class="details">Details: <em>1750 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 6 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>6. Amazing Pool Party Villa</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(40) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $3,850 / month with taxes</span>
                      <span class="details">Details: <em>3660 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 4 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>7. Sunny Apartment</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $5,450 / month with taxes</span>
                      <span class="details">Details: <em>1640 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 8 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 5 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-02.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>8. Third House of Gaming</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(15) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $5,520 / month with taxes</span>
                      <span class="details">Details: <em>1660 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 5 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 4 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="#"><h4>9. Relaxing BBQ Party Villa</h4></a>
                      <h6>by: Sale Agent</h6>
                      <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(20) Reviews</li>
                      </ul>
                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> $4,760 / month with taxes</span>
                      <span class="details">Details: <em>2880 sq ft</em></span>
                      <ul class="info">
                        <li><img src="assets/images/listing-icon-02.png" alt=""> 6 Bedrooms</li>
                        <li><img src="assets/images/listing-icon-03.png" alt=""> 4 Bathrooms</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assets/images/black-logo.png" alt="Plot Listing">
            </div>
            <p>If you consider that <a rel="nofollow" href="https://templatemo.com/tm-564-plot-listing" target="_parent">Plot Listing template</a> is useful for your website, please <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a little via PayPal.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <ul>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Listing</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Awards</a></li>
                  <li><a href="#">Useful Sites</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
            <p>27th Street of New Town, Digital Villa</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#">010-020-0340</a>
              </div>
              <div class="col-lg-6">
                <a href="#">090-080-0760</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.
            <br>
			Design: <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="landing_page/vendor/jquery/jquery.min.js"></script>
  <script src="landing_page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="landing_page/assets/js/owl-carousel.js"></script>
  <script src="landing_page/assets/js/animation.js"></script>
  <script src="landing_page/assets/js/imagesloaded.js"></script>
  <script src="landing_page/assets/js/custom.js"></script>

</body>

</html>
