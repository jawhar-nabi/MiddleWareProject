
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
            <div id="myDIV">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">

                <li class=" btn active"><a href="/"><span>Accueil</span></a></li>
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
                <li class=" btn"><a href="articles"><span>Articles</span></a></li>
                
               
                
            @guest
                            <li class="btn nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><span>Se connecter</span></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="btn nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><span>S'inscrire</span></a>
                                </li>
                            @endif
                        @else
                        
                        <li class=" btn"><a href="ajout"><span>Louer</span></a></li>
                        <!-- <li class=" btn"><a href="contact.html"><span>Contact</span></a></li> -->
                                  @if(Auth()->user()->admin==1)
                                        <li class="has-children btn">
                                          <a ><span>Paramétres</span></a>
                                          <ul class="dropdown arrow-top">
                                            <li><a href="parametresArticles">Tous les articles</a></li>
                                            <li><a href="parametresCategories">Ajouter catégorie</a></li>
                                            <li><a href="DesignerAdmin">Designer admin </a></li>
                                          </ul>
                                        </li>
                                        @endif
                            <li class="btn nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
                                </a>

                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        <span>{{ __('Voir Profil') }}</span>
                                    </a>

                                   
                                </div> -->
                                
                                
                                
                                
                                
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span>{{ __('Déconnexion') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                        @endguest

           


              </ul>
              </div>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
       
            @yield('content')
      
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
           
             &copy;<script>document.write(new Date().getFullYear());</script>
            
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
  <!-- <script>// Get the container element
var btnContainer = document.getElementById("myDIV");
// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script> -->
  </body>

</html>