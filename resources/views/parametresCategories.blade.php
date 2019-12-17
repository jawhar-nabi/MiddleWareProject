@extends('layouts.app')

@section('content')
  <div style="background-color:#878686;">
    <br><br><br><br><br><br>

    <div class="container">
      
    <h2>Ajouter Categories</h2>
    <form method="post" action="{{ url('ajouterCategories') }}" >
    @csrf
<div class="row" style="margin-top: 1%;">

    <div class="col-sm-3 " style="margin-left: 18%;">
									<div class="input-group input-group-sm " >
										<span class=" text-white btn-warning" id="basic-addon1" style="width: 20%;text-align:center;">Nom
										</span> <input id="nom" type="text" name="nom" placeholder="Nom Categorie" style="height: 30px;width: 20px;"
										class="form-control" 
										required  />
									</div>
								</div>
								
                <div class="col-sm-3">
								<div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn text-white btn-primary" value="Ajouter">
                  </div>
        </div>
        
  
  </div>
  </form>
  
  <div class="container-fluid" style="margin-top: 6%; width: 60%">
  <div class="card-body">
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
  <h2 style="text-align:center">Listes Catégories</h2>
  <div class="container">
  <table class="table table-hover table-dark">
  <thead>

    <tr style="text-align:center">
      <th scope="col">#</th>
      <th scope="col">nom</th>
      
    </tr>
   
  </thead>
  <tbody>
  @foreach($allCategories as $key =>$v_categorie)
  <tr style="text-align:center">
      <th scope="col">{{$key+1}}</th>
      <th scope="col">{{$v_categorie->nom}}</th>
      
    </tr>
    @endforeach
  </tbody>

  </table>

  <div  style="margin-top: 20%;">

  <br>

</div>

  </div>

  


</div>


    </div>
  </div>
    @endsection