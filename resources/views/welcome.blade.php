
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kira.tn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
 
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white h2 mb-0">kira.tn</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php"><span>Accueil</span></a></li>
             <!--   <li class="has-children">
                  <a href="about.html"><span>Dropdown</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                    <li class="has-children">
                      <a href="#">Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                        <li><a href="#">Menu Four</a></li>
                      </ul>
                    </li>
                  </ul> -->
                </li>
                <li><a href="articles"><span>Catégorie</span></a></li>
                <li><a href="about.html"><span>A propos</span></a></li>
                <li><a href="contact.html"><span>Contact</span></a></li>


            @if (Route::has('login'))
                    @auth
                    <!--TODO-->
                    <li>  <a href=#><span>Hey!</span></a></li>

                    <!--nom du compte-->
                    @else
                      <li>  <a href="{{ route('login') }}"><span>Se connecter</span></a></li>

                        @if (Route::has('register'))
                         <li>   <a href="{{ route('register') }}"><span>S'inscrire</span></a></li>
                        @endif
                    @endauth
            @endif

           


              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <div class="site-blocks-cover overlay" style="background-image: url(images/85.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
		
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
              <h1 data-aos="fade-up">Trouvez des <span class="typed-words"></span></h1>
                <p data-aos="fade-up" class=" w-75 mx-auto">Trouvez tous vos désirs pour tous vos besoin en seulement un clic !</p>
              </div>
            </div>

            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">
                  <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                    <input type="text" class="form-control" placeholder="Que cherchez vous?">
                  </div>
                  <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input type="text" class="form-control" placeholder="Location">
                    </div>
                    
                  </div>
                  <div class="col-lg-12 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="" id="">
                        <option value="">Tous les categories</option>
                        <option value="">Hôtels</option>
                        <option value="">Restaurants</option>
                        <option value="">Manger &amp; Boire</option>
                        <option value="">Evenements</option>
                        <option value="">Fitness</option>
                        <option value="">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn text-white btn-primary" value="Search">
                  </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    
      
    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Most Visited Places</h2>
            <p class="color-black-opacity-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a href="listings-single.html" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
                <a class="px-3 mb-3 category" href="#">Hotels</a>
                <h2 class="mb-1"><a href="listings-single.html">Luxe Hotel</a></h2>
                <span class="address">West Orange, New York</span>
              </div>
            </div>

          </div>
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                <a class="px-3 mb-3 category" href="#">Restaurants</a>
                <h2 class="mb-1"><a href="listings-single.html">Jones Grill &amp; Restaurants</a></h2>
                <span class="address">Brooklyn, New York</span>
              </div>
            </div>

          </div>
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_3.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                <a class="px-3 mb-3 category" href="#">Events</a>
                <h2 class="mb-1"><a href="listings-single.html">Live Band</a></h2>
                <span class="address">West Orange, New York</span>
              </div>
            </div>

          </div>

          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_4.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a href="listings-single.html" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
                <a class="px-3 mb-3 category" href="#">Others</a>
                <h2 class="mb-1"><a href="listings-single.html">Gourmet Coffees</a></h2>
                <span class="address">New York City</span>
              </div>
            </div>

          </div>
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_5.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                <a class="px-3 mb-3 category" href="#">Spa</a>
                <h2 class="mb-1"><a href="listings-single.html">La Italia Spa</a></h2>
                <span class="address">Italy</span>
              </div>
            </div>

          </div>
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_6.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                <a class="px-3 mb-3 category" href="#">Stores</a>
                <h2 class="mb-1"><a href="listings-single.html">Super Market Mall</a></h2>
                <span class="address">West Orange, New York</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Popular Categories</h2>
            <p class="color-black-opacity-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

        <div class="row align-items-stretch">
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon mb-3"><span class="flaticon-hotel"></span></span>
              <span class="caption mb-2 d-block">Hotels</span>
              <span class="number">4,89</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon mb-3"><span class="flaticon-microphone"></span></span>
              <span class="caption mb-2 d-block">Events</span>
              <span class="number">482</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon mb-3"><span class="flaticon-flower"></span></span>
              <span class="caption mb-2 d-block">Spa</span>
              <span class="number">194</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon mb-3"><span class="flaticon-restaurant"></span></span>
              <span class="caption mb-2 d-block">Stores</span>
              <span class="number">1,472</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon mb-3"><span class="flaticon-cutlery"></span></span>
              <span class="caption mb-2 d-block">Restaurants</span>
              <span class="number">439</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon mb-3"><span class="flaticon-bike"></span></span>
              <span class="caption mb-2 d-block">Other</span>
              <span class="number">692</span>
            </a>
          </div>
        </div>

        <div class="row mt-5 justify-content-center tex-center">
          <div class="col-md-4"><a href="#" class="btn btn-block btn-outline-primary btn-md px-5">View All Categories</a></div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
            <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">Why Us</h2>
            <div class="row mt-4">
              <div class="col-12">
                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">How to list my item?</a>

                  <div class="collapse" id="collapse-1">
                    <div class="pt-2">
                      <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Is this available in my country?</a>

                  <div class="collapse" id="collapse-4">
                    <div class="pt-2">
                      <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Is it free?</a>

                  <div class="collapse" id="collapse-2">
                    <div class="pt-2">
                      <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">How the system works?</a>

                  <div class="collapse" id="collapse-3">
                    <div class="pt-2">
                      <p class="mb-0">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didnâ€™t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">How It Works</h2>
            <p class="color-black-opacity-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="images/step-1.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">1</span>
              <h3>Decide What To Do</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="images/step-2.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">2</span>
              <h3>Find What You Want</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="images/step-3.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">3</span>
              <h3>Explore Amazing Places</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Satisfied Customers</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Willie Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Robert Jones</p>
              </figure>
              <blockquote>
                <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Peter Richmond</p>
              </figure>
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didnâ€™t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Tips &amp; Articles</h2>
            <p class="color-black-opacity-5">See Our Daily tips &amp; articles</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <div class="h-entry-inner">
                <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May 5th, 2019</div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <div class="h-entry-inner">
                <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May 5th, 2019</div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_3.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <div class="h-entry-inner">
                <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May 5th, 2019</div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">Let's get started. Create your account</h2>
            <p class="mb-0 text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="signup.html" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Products</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
              strings: ["Voitures"," Hôtels"," Maisons", " Salle des fêtes"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  
  </body>

</html>