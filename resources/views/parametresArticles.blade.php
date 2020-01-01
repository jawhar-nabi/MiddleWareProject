@extends('layouts.app')

@section('content')
@if(Auth()->user()->admin==0)
<div class="site-wrap" >

<div class=" site-blocks-cover inner-page-cover overlay"  data-aos="fade" data-stellar-background-ratio="0.5">
  

  <div class="container">


  
  </div>
</div>  

<div >
<div  style="margin-top: -20%; z-index : 289; margin-bottom:20%; ">
  <div class="container" >
  <center><h1>404|Not Found </h1></center>
    
  </div>
</div>
</div>







@endif
@if(Auth()->user()->admin==1)
  <div style="background-color:grey;" >
    <br><br><br><br><br><br>

    <div class="container" >
      
    <div class="card-body" >
                @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>

        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>

        </div>
        @endif

      </div>
      <style>
		.title {
			margin-bottom: 15px;
      margin-left: 0px;
			color: #ffffff;
			font-weight: bold;
		}
    </style>

      <h2 class="title">Tous les Articles</h2>
      
        <div class="container">
        
        
        <table class="table table-hover table-dark">
  <thead>

    <tr>
      <th scope="col">Categorie</th>
      <th scope="col">nom</th>
      <th scope="col">prix</th>
      <th scope="col">description</th>
      <th scope="col">Emplacement</th>
      
      <th scope="col">Partager</th>
      <th scope="col">User</th>
      <th scope="col">Images</th>
      <th scope="col">Actions</th>
    </tr>
   
  </thead>
  <tbody>
  @foreach($allArticles as $v_article)
   
    <tr>
      <th scope="col">{{$v_article->nomc}}</th>
      <th scope="col">{{$v_article->nom}}</th>
      <th scope="col">{{$v_article->prix}}</th>
      <th scope="col">{{$v_article->description}}</th>
      <th scope="col">{{$v_article->emplacement}}</th>
      
      @if($v_article->partager==1)
        <th scope="col">Oui</th>
      @else
      <th scope="col">Non</th>
      @endif
     

      <th scope="col">{{$v_article->nomU}} {{$v_article->prenomU}}</th>
      <th scope="col">{{$v_article->image}}</th>
      <td>
        <!--button type="button" class="btn btn-success">Accepter</button>
        <button type="button" class="btn btn-warning">Ignorer</button-->
        <a href="{{ URL::to('AccepterArticle/'.$v_article->id) }}">Accepter</a>
        <a href="{{ URL::to('IgnorerArticle/'.$v_article->id) }}">Ignorer</a>
        
        <!--button type="button" class="btn btn-danger"  onclick=`location.href="{{ url('DeleteArticle/'.$v_article->id) }}"`>Supprimer</button-->
        <a href="{{ URL::to('DeleteArticle/'.$v_article->id) }}">Supprimer</a>

      </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
      <div  style="margin-right: auto; margin-left: auto; width: 10% ;">
       {{ $allArticles->links() }}
       
        </div>

        <div  style="margin-top: 20%;">

        <br>

        </div>

  
      </div>
    </div>
  </div>
  @endif
    @endsection