@extends('layout.app')
@section('title','All transport');
    
@section('content')
    

   <div class="container">
    <table class="table text-dark bg-light text-center mt-5">
        <thead>
          <tr>
            
            <th scope="col">Matricule</th>
            <th scope="col">Driver First Name</th>
            <th scope="col">Driver Last Name</th>
            <th scope="col">Date of Entry</th>
            <th scope="col">Release Date</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
            @foreach($transport as $item)
                
            
          <tr>
            

          <td>{{$item->matricule}}</td>
          <td>{{$item->firstNameCond}}</td>
            <td>{{$item->lastNameCond}}</td>
            <td>{{$item->dateEntre}}</td>
            <td>{{$item->dateSortie}}</td>
            <td>{{$item->quantite}}</td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
   @endsection