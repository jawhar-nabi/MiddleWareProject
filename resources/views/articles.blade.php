@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="site-blocks-cover overlay" style="background-image: url(images/2529051.jpg); opacity:0.9;" data-aos="fade" data-stellar-background-ratio="0.5">
		
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">


          <div class="col-md-10">
          <div class="site-section">

      <div style="margin-top : 5% ;">
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
              <span class="icon mb-3"><span class="flaticon-bike"></span></span>
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

        <!-- <div class="row mt-5 justify-content-center tex-center">
          <div class="col-md-4"><a href="{{ URL::to('searchAll') }}" class="btn btn-block btn-outline-primary btn-md px-5">Voir toutes les categories</a></div>
        </div> -->
      </div>
    </div>
    </div>
    </div>

           
            <!-- <div  style="margin-top : 5% ;"class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
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
            </div> -->

          </div>
        </div>
    
    <!-- Modal -->
  <div class="container">


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
            <a id="categorie" class="px-3 mb-3 category" href="{{ URL::to('searchVoiture') }}">jhjhqkfjhq</a>
            <h2 id="titre" class="mb-1 "></h2>
          </div>
        </div>
        <div style="background-color : white; color : black;">
            <!-- <span  ></span> -->
            <i id="emplacement" class="fa fa-location-arrow" style="font-size:24px"></i>

        <h5><b>Description : </b></h5>
        <h6 id="description" ></h6>
        <h5><b>Telephone : </b></h5>
        <h6 id="num" ></h6>
        <br><br>
        <div class="col">
           <div class="row">

            <h6> publié par : </h6>       
             <h5 id="prenom"></h5>
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
      
    
    <div style="margin-top : 7% ;" class="site-section" data-aos="fade">
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
              <div class="listing-item">
                <div class="listing-image">
                  <img src="pics/{{$v_art->image}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a class="px-3 mb-3 category" href="{{ URL::to('searchVoiture') }}" >{{$v_art->nomC}}</a>
                  <h2 class="mb-1"><a >{{$v_art->nom}}</a></h2>
                  <span class="address">{{$v_art->nomU}} {{$v_art->prenomU}}, {{$v_art->emplacement}}</span>
                  <button href="#my_modal" type="button" class="bookmark btn btn-info btn-lg" data-myvalue="trouducul" data-toggle="modal" data-target="#show" data-articleid="{{$v_art->id}}" onclick='myModal({{$v_art->id}},"{{$v_art->nomC}}","{{$v_art->nom}}","{{$v_art->nomU}}", "{{$v_art->prenomU}}", "{{$v_art->emplacement}}","{{$v_art->description}}","{{$v_art->image}}","{{$v_art->num}}")'><span class="icon-plus"></span></button>

                </div>
              </div>
            </div>

            @endforeach
        </div>
      



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
            <p class="mb-0"><a href="signup.html" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">S'inscrire</a></p>
          </div>
        </div>
      </div>
    </div>
    @endguest
    <script>
function myModal(id,categorie,titre,nomAuteur, prenomAuteur, emplacement, description,image,num) {
  document.getElementById('titre').innerHTML = titre;
  document.getElementById('categorie').innerHTML = categorie;
  document.getElementById('emplacement').innerHTML = emplacement;
  document.getElementById('description').innerHTML = description;
  document.getElementById('imageA').src = "pics/"+image;
  document.getElementById('num').innerHTML = num;
  document.getElementById('nom').innerHTML = nomAuteur+"  ";
  document.getElementById('prenom').innerHTML = prenomAuteur+"  ";

}
</script>
<script>
$(function () {
  $('.example-popover').popover({
    container: 'body'
  })
})

</script>
    @endsection