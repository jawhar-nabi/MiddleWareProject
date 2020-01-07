
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/login.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <img class="avatar" src="images/pdp.png" alt="photo de profil">
                
                <h1 style="margin : 10%;">{{auth()->user()->prenom}}   {{auth()->user()->nom}} </h1>
                <h1 style=" margin-top : 10%;"> <button style=" border:none;    background-color: Transparent;  margin : 4%;" class="fa fa-gear param"></button>  </h1>

                </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- Modal -->
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
             <!-- <span id="created_at"></span>  --> 
          </div>
        </div>
        
        <div style="background-color : white; ">
            <!-- <span  ></span> -->
            <i id="emplacement" class="fa fa-location-arrow title" style="font-size:24px"></i>

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
 
  </div>
</div>
</div>
    <h1 style=" margin-left: 7%;margin-top : 3% ;" class="title">Mes offres</h1>
    <div  class="site-section" data-aos="fade">
    
      <div class="container">
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
                  
                  <button href="#my_modal" type="button" class="bookmark btn btn-info btn-lg" data-myvalue="trouducul" data-toggle="modal" data-target="#show" data-articleid="{{$v_art->id}}" onclick='myModal({{$v_art->id}},"{{$v_art->nomC}}","{{$v_art->nom}}","{{$v_art->nomU}}", "{{$v_art->prenomU}}", "{{$v_art->emplacement}}","{{$v_art->description}}","{{$v_art->image}}","{{$v_art->num}}","{{$v_art->created_at}}")'><span class="icon-plus"></span></button>

                </div>
              </div>
            </div>

            @endforeach
        </div>
        <div  style="margin-right: auto; margin-left: auto; width: 10% ;">
       {{ $a->links() }}
        </div>
    </div>

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
function myModal(id,categorie,titre,nomAuteur, prenomAuteur, emplacement, description,image,num,created_at) {
  document.getElementById('titre').innerHTML = titre;
  document.getElementById('categorie').innerHTML = categorie;
  document.getElementById('emplacement').innerHTML = emplacement;
  document.getElementById('description').innerHTML = description;
  document.getElementById('imageA').src = "pics/"+image;
  document.getElementById('num').innerHTML = num;
  document.getElementById('nom').innerHTML = nomAuteur+"  ";
  document.getElementById('prenom').innerHTML = prenomAuteur+"  ";

  date=new Date(created_at);
  document.getElementById('created_at').innerHTML = date.getDate()+"-"+date.getMonth()+1+"-"+date.getFullYear()+", à "+date.getHours()+":"+date.getMinutes();
  

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