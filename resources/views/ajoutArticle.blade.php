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
        <div class="col-md-8">
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
                            <label for="nom" class="col-md-6 col-form-label ">{{ __('Nom du bien') }}</label>

                            <div class="col-md-12">
                                <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="nom" class="col-md-6 col-form-label ">{{ __('Categorie') }}</label>

                    <div class="col-md-8 ">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="" id="">
                      <option value="">Tous les categories</option>
                      @foreach($b as $val_categorie)
                        <option value={{$val_categorie->nom}}>{{$val_categorie->nom}}</option>
                        @endforeach                 
                          </select>
                    </div>
                  </div>
                  
                        <!-- <label for="categorie" class="col-md-6 col-form-label ">{{ __('Categorie') }}</label>
                            <div class="col-md-12">
                                <input id="categorie" type="text"  name="categorie" value="{{ old('prenom') }}" required autocomplete="Categorie" autofocus>
                            </div>-->
                            </div> 


                        <div class="form-group row">
                            <label for="prix" class="col-md-12 col-form-label ">{{ __('Prix') }}</label>

                            <div class="col-md-12">
                                <input id="prix" type="prix"  name="prix" value="{{ old('email') }}" required autocomplete="prix">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emplacement" class="col-md-12 col-form-label ">{{ __('Emplacement') }}</label>

                            <div class="col-md-12">
                                <input id="emplacement" type="emplacement" name="emplacement" required autocomplete="emplacement">

                             
                            </div>
                        </div>
                        <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>

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


















































