@extends('layouts.app')

@section('content')
  <div style="background-color:grey;">
    <br><br><br><br><br><br>

    <div class="container">
      <h2>Tous les Articles</h2>
        <div class="container">
        
        
        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Categorie</th>
      <th scope="col">nom</th>
      <th scope="col">prix</th>
      <th scope="col">description</th>
      <th scope="col">Emplacement</th>
      <th scope="col">Type</th>
      <th scope="col">Partager</th>
      <th scope="col">User</th>
      <th scope="col">Images</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@twitter</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
        <button type="button" class="btn btn-success">Success</button>

        <button type="button" class="btn btn-danger">Danger</button>


      </td>
    </tr>
  </tbody>
</table>


  

  
      </div>
    </div>
  </div>
    @endsection