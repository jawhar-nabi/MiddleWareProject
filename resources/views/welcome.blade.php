@extends('layouts.app')

@section('content')
<!-- 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
              <form method="post" action="{{ url('search') }}">
              @csrf
                <div class="row align-items-center">
                  <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                    <input id="nomA"  name="nomA" type="text" class="form-control" placeholder="Que cherchez vous?">
                  </div>
                  <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input id="emplacement"  name="emplacement" type="text" class="form-control" placeholder="Location">
                    </div>
                    
                  </div>
                  <div class="col-lg-12 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" id="nomC"  name="nomC">
                      <option value="tous">Tous les categories</option>
                      @foreach($b as $val_categorie)
                        <option value={{$val_categorie->id}}>{{$val_categorie->nom}}</option>
                        @endforeach  
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


   <!-- Modal href="{{ URL::to('searchVoiture') }}"-->
   <div class="container">
	<style>
		.title {
			margin-bottom: 5px;
      margin-left: 8px;
			color: #00918e;
			font-weight: bold;
		}
    .descr {
      margin-left: 13px;
			
			font-weight: bold;
		}
		</style>


<div class="modal fade" id="show" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <!-- ****************************************************** -->
  <div class="modal-content">

    <!-- <div class="row"> -->
      <!-- <div class="col-md-18 mb-18 mb-lg-18 col-lg-18" > -->
        <div class="listing-item">
          <div class="listing-image">
            <img id="imageA" src="" alt="failed to load image." class="" width="200" height="100">
          </div>
          <div class="listing-item-content">            
            <a id="categorie" class="px-3 mb-3 category" ></a>
            <h2 id="titre" class="mb-1 "></h2>
          </div>
        </div>
        <div style="background-color : white; ">
            <!-- <span  ></span> -->
            <i id="emplacement1" class="fa fa-location-arrow title" style="font-size:24px"></i>

        <h5 class="title"><b>Description : </b></h5>
        <h6 class="descr" id="description" ></h6>

        <div class="col">
           <div class="row">
        <h5 class="title"><b>Telephone : &nbsp;</b></h5>
        <h5 id="num" ></h5>
        </div></div>
        <br>
        
        <div class="col" > 
           <div class="row">
          
            <h5 class="title" > publié par : &nbsp;</h5>       
             <h5 id="prenom"></h5>
             &nbsp;
            <h5 id="nom"></h5>
            
          </div>
        </div>
        
        <!-- </div> -->
        <!-- </div> -->
        </div>
        </div>


<!-- ******************************************************************* -->
      
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div> -->
    
  </div>
</div>
</div>
    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Trouvez ce que vous cherchez pour une durée que vous choisissez !</h2>
            <p class="color-black-opacity-5">Beaucoup de choix, movibilité, agilité et pour la durée qui vous necessite.</p>
          </div>
        </div>

        <div class="row">
        @foreach($a as $v_art)

          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4" >
            <div class="listing-item" style="height:220px;">
              <div class="listing-image">
                <img src="pics/{{$v_art->image}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category" href="{{ URL::to('searchVoiture') }}" >{{$v_art->nomC}}</a>
                <h2 class="mb-1"><a >{{$v_art->nom}}</a></h2>        
                <span class="">{{\Carbon\Carbon::parse($v_art->created_at)->diffForHumans()}}</span>
                <br>
                <span class="address">{{$v_art->nomU}} {{$v_art->prenomU}}, {{$v_art->emplacement}}</span>
                <button href="#my_modal" type="button" class="bookmark btn btn-info btn-lg" data-myvalue="trouducul" data-toggle="modal" data-target="#show" data-articleid="{{$v_art->id}}" onclick='myModal({{$v_art->id}},"{{$v_art->nomC}}","{{$v_art->nom}}","{{$v_art->nomU}}", "{{$v_art->prenomU}}", "{{$v_art->emplacement}}","{{$v_art->description}}","{{$v_art->image}}","{{$v_art->num}}")'><span class="icon-plus"></span></button>

              </div>
            </div>
          </div>

          @endforeach
        </div>
      

    
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Les offres du moment</h2>
            <p class="color-black-opacity-5">Trouvez les derniers offres de location pour tous les types et les catégories.</p>
          </div>
        </div>

        <div class="row align-items-stretch">
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="{{ URL::to('searchHotel') }}" class="popular-category h-100">
              <span class="icon mb-3"><span class="icon-hotel"></span></span>
              <span class="caption mb-2 d-block">Hôtels</span>
              <span class="number">+100</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="{{ URL::to('searchSalleDeSport') }}" class="popular-category h-100">
              <span class="icon mb-3"><span class="fa fa-soccer-ball-o"></span></span>
              <span class="caption mb-2 d-block">Salle de sport</span>
              <span class="number">+140</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="{{ URL::to('searchSalleDeFetes') }}" class="popular-category h-100">
              <span class="icon mb-3"><span class="icon-heart"></span></span>
              <span class="caption mb-2 d-block">Salle de fêtes</span>
              <span class="number">+55</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="{{ URL::to('searchImmobilier') }}" class="popular-category h-100">
              <span class="icon mb-3"><span class="icon-home"></span></span>
              <span class="caption mb-2 d-block">Immobilier</span>
              <span class="number">+3000</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="{{ URL::to('searchVoiture') }}" class="popular-category h-100">
              <span class="icon mb-3"><span class="icon-car"></span></span>
              <span class="caption mb-2 d-block">Voitures</span>
              <span class="number">439</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="{{ URL::to('searchAll') }}" class="popular-category h-100">
              <span class="icon mb-3"><span class="icon-room"></span></span>
              <span class="caption mb-2 d-block">Other</span>
              <span class="number">6920</span>
            </a>
          </div>
        </div>

        <div class="row mt-5 justify-content-center tex-center">
          <div class="col-md-4"><a href="{{ URL::to('searchAll') }}" class="btn btn-block btn-outline-primary btn-md px-5">Voir toutes les articles</a></div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
            <img src="images/13628.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">Pourquoi nous ?</h2>
            <div class="row mt-4">
              <div class="col-12">
                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">Comment louer votre bien ?</a>

                  <div class="collapse" id="collapse-1">
                    <div class="pt-2">
                      <p class="mb-0">Grâçe à un réseau sécurisé et fiable, KIRA vous permet de louer votre bien pour de courtes ou de longues durées, vous rapproche du loccateur et vous accompagne pour profiter de vos elements abondonnés.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Ou se trouve KIRA?</a>

                  <div class="collapse" id="collapse-4">
                    <div class="pt-2">
                      <p class="mb-0">KIRA est basé à sousse mais grace à ses confidentiels, qui s'occupe de tester la conformité et la réalité des offres, se distribuent sur toute la tunisie pour couvrir tout le territoire du pays.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Est ce que c'est gratuit?</a>

                  <div class="collapse" id="collapse-2">
                    <div class="pt-2">
                      <p class="mb-0">KIRA vous aider à louer en toute gratuité avec l'assurance de la conformité du produit et du bon fonctionnement toutes la durée du locataire.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">Comment ça fonctionne?</a>

                  <div class="collapse" id="collapse-3">
                    <div class="pt-2">
                      <p class="mb-0">Des particuliers et des professionnels peuvent ajouter des élèments à louer et KIRA s'occupe de la verification du produit avant de confirmer la publication, donc vous trouvez les meilleurs offres des locations avec une conformité de plus. </p>
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
            <h2 class="font-weight-light text-primary">Comment ça fonctionne ?</h2>
            <p class="color-black-opacity-5">Des particuliers et des professionnels peuvent ajouter des élèments à louer et KIRA s'occupe de la verification du produit avant de confirmer la publication, donc vous trouvez les meilleurs offres des locations avec une conformité de plus. </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="images/step-1.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">1</span>
              <h3>Cherchez ce que vous desirez</h3>
              <p>Trouvez le produit qui vous convient.</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="images/step-2.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">2</span>
              <h3>Contacter le locataire</h3>
              <p>KIRA vous propose un cahier de charge à recommander pour les nogaciations des locations pour etre mefiant.</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="images/step-3.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">3</span>
              <h3>Amuses toi avec ce que tu arrives de louer</h3>
              <p>Maintenant, tu peux utiliser votre biens comme vous voulez et n'oublier pas de contacter le locataire en cas de prolongation du durée.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- <div class="site-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Clientéle satisfaite</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Abed laaziz ben fateh</p>
              </figure>
              <blockquote>
                <p>&ldquo;Service tellement recommandé.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Sihem baji</p>
              </figure>
              <blockquote>
                <p>&ldquo;J'ai louer un superbe appartement grâçe à KIRA, je vis dedans depuis 5 ans déjà !&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Majid houas</p>
              </figure>
              <blockquote>
                <p>&ldquo;KIRA est la meilleure !&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Sofien sfaxi</p>
              </figure>
              <blockquote>
                <p>&ldquo;Que de bonnes affaires !&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div> -->



    <!-- <div class="site-section">
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
    </div> -->

    @guest
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">N'hesites pas de créer votre compte maintenant !</h2>
            <p class="mb-0 text-white">Vite créer votre compte et trouver plus facilement les dernieres offres dans KIRA </p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="{{ route('register') }}" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">S'inscrire</a></p>
          </div>
        </div>
      </div>
    </div>
    @endguest
    <script>
function myModal(id,categorie,titre,nomAuteur, prenomAuteur, emplacement, description,image,num) {
  document.getElementById('titre').innerHTML = titre;
  document.getElementById('categorie').innerHTML = categorie;
  document.getElementById('emplacement1').innerHTML = emplacement;
  document.getElementById('description').innerHTML = description;
  document.getElementById('imageA').src = "pics/"+image;
  document.getElementById('num').innerHTML = num;
  document.getElementById('nom').innerHTML = nomAuteur+"  ";
  document.getElementById('prenom').innerHTML = prenomAuteur+"  ";

}
</script>

    @endsection