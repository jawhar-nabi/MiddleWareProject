@extends('layouts.app')

@section('content')
  
  <div class="site-wrap">

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/login.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            <div class="row justify-content-center">
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div  >
      <div  >
        <div >
          
          <div class="col-md-6 mb-8" style="margin-left: 25%;">
            <div class="container " style="margin-top: -40%;  ">
            <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Louer vos biens') }}</div>

                <div class="card-body">
                @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <!-- <img src="images/{{ Session::get('image') }}"> -->
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- enctype="multipart/form-data" -->
                    <form method="POST" action="{{ url('ajout') }}" >
                        @csrf

                        <div class="form-group row">
                            <span for="nom" class="col-md-6 col-form-label ">{{ __('Nom du bien') }}</span>

                            <div class="col-md-12">
                                <center><input id="nom" type="text" name="nom" style="width: 80%; height:40px;"value="{{ old('nom') }}" required autocomplete="nom" autofocus></center>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="nom" class="col-md-6 col-form-label ">{{ __('Categorie') }}</label>

                    <div class="col-md-12 ">
                    <center><div class="select-wrap" style="width: 80%; height:40px;">
                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                   <select class="form-control" name="categorie"  >
                      <option value="tous">Tous les categories</option>
                      @foreach($b as $val_categorie)
                        <option value={{$val_categorie->id}}>{{$val_categorie->nom}}</option>
                        @endforeach                 
                          </select> </center>
                    </div>
                  </div>
                  
                        <!-- <label for="categorie" class="col-md-6 col-form-label ">{{ __('Categorie') }}</label>
                            <div class="col-md-12">
                                <input id="categorie" type="text"  name="categorie" value="{{ old('prenom') }}" required autocomplete="Categorie" autofocus>
                            </div>
                            </div> -->

                            <div class="form-group row">
                            <span for="nom" class="col-md-6 col-form-label ">{{ __('Prix') }}</span>

                            <div class="col-md-12">
                                <center>
                        <input id="prix" type="prix" style="width: 80%; height:40px;" name="prix" value="{{ old('email') }}" required autocomplete="prix">
                               </center>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emplacement" class="col-md-12 col-form-label ">{{ __('Emplacement') }}</label>

                            <div class="col-md-12">
                            <center> <input id="emplacement" type="emplacement"style="width: 80%; height:40px;" name="emplacement" required autocomplete="emplacement">
                            </center>
                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-12 col-form-label ">{{ __('Description') }}</label>

                            <div class="col-md-12">
                            <center> 
                            <textarea style="width: 80%; height:140px;"  name="description" id="description" cols="30" rows="7" class="form-control" placeholder="Écrivez votre description ici ..."></textarea>
               
                            </center>
                             
                            </div>
                        </div>











                        <div class="form-group row">
                <div class="col-md-12">
                <center> <input type="file" style="width: 90%; height:45px;" name="image" class="form-control"> </center> 
                </div></div>
                <br>
                        <!-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-12 col-form-label ">{{ __('Confirmer Mot de Passe') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

            </form>
          </div>
        </div>
      </div>
    </div>
    
    
  </div>

  @endsection


















































