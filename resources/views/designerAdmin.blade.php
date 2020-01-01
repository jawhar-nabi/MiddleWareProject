@extends('layouts.app')

@section('content')


@if(Auth()->user()->admin==0)
<div class="site-wrap">

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
<style>
		.title {
			margin-bottom: 15px;
      margin-left: 0px;
			color: #ffffff;
			font-weight: bold;
		}
    </style>


  <div style="background-color:#878686; ">
    <br><br><br><br><br><br>

    <div class="container">
      
    <h2 class="title">Rechercher Nouveaux Admins</h2>
    <form method="post" action="{{ url('DesignerAdmin') }}"  style="margin-top: 2%;">
      @csrf
    <div class="row" style="margin-top: 1%;">

            <div class="col-sm-3 " style="margin-left: 8%;">
									<div class="input-group input-group-sm " >
										<span class=" text-white btn-warning" id="basic-addon1" style="width: 40px;text-align:center;">Nom 
										</span> <input id="nom" type="text" name="nom" placeholder="Nom" style="height: 30px;width: 20px;"
										class="form-control" 
										  />
									</div>
						</div>

            <div class="col-sm-3 " >
									<div class="input-group input-group-sm " >
										<span class=" text-white btn-warning" id="basic-addon1" style="width: 60px;text-align:center;">Prenom 
										</span> <input id="prenom" type="text" name="prenom" placeholder="Prenom" style="height: 30px;width: 20px;"
										class="form-control" 
										  />
									</div>
						</div>

            
								
                <div class="col-sm-3">
								<div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn text-white btn-primary" value="Rechercher">
                  </div>
        </div>
        
  
  </div>
  </form>

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

  @if ($allUsers !=null)
  <h2 class="title" style="text-align:center; margin-top: 5%;">Tous les Users</h2>
  <div class="container">
  <table class="table table-hover table-dark">
  <thead>

    <tr style="text-align:center">
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>

      
    </tr>
   
  </thead>
  <tbody>
  @foreach($allUsers as $key =>$v_user)
  <tr style="text-align:center">
      <th scope="col">{{$key+1}}</th>
      <th scope="col">{{$v_user->nom}}</th>
      <th scope="col">{{$v_user->prenom}}</th>
      <th scope="col">{{$v_user->email}}</th>

      
      @if($v_user->admin==1)
        <th scope="col">Admin</th>
      @else
      <th scope="col">User</th>
      @endif
      <th  scope="col">
      <a href="{{ URL::to('ChangerRole/'.$v_user->id) }}">Changer Role</a><br>
      <a href="{{ URL::to('DeleteUser/'.$v_user->id) }}">Supprimer</a>
    </th>
      
    </tr>
    @endforeach
  </tbody>

  </table>
  

        
  </div>
 @endif

 @if ($allUsers ==null)
  <h2 class="title" style="text-align:center; margin-top: 5%;">Listes Admins</h2>
  <div class="container">
  <table class="table table-hover table-dark">
  <thead>

    <tr style="text-align:center">
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <!-- <th scope="col">Action</th> -->

      
    </tr>
   
  </thead>
  <tbody>
  @foreach($allAdmins as $key =>$v_user)
  <tr style="text-align:center">
      <th scope="col">{{$key+1}}</th>
      <th scope="col">{{$v_user->nom}}</th>
      <th scope="col">{{$v_user->prenom}}</th>
      <th scope="col">{{$v_user->email}}</th>

      
      @if($v_user->admin==1)
        <th scope="col">Admin</th>
      @else
      <th scope="col">User</th>
      @endif
      <!-- <th  scope="col">
      <a href="{{ URL::to('ChangerRole/'.$v_user->id) }}">Changer Role</a><br>
      <a href="{{ URL::to('DeleteUser/'.$v_user->id) }}">Supprimer</a>
    </th> -->
      
    </tr>
    @endforeach
  </tbody>

  </table>
  
  <div  style="margin-right: auto; margin-left: auto; width: 10% ;">
       {{ $allAdmins->links() }}
       
        </div>

        

  </div>
  </div>
 @endif




 <br><br><br><br><br>


    </div>
  </div>
  @endif
    @endsection