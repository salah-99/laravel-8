@extends('layout.app')
@section('title','cmdisplay');
@section('content')

<div class="container">

    <table style="background-color: transparent" class="table text-dark  text-center mt-5">
        <thead>
          <tr>
            
            <th scope="col">Num</th>
            <th scope="col">Quantite</th>
            <th scope="col">date Commande</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach($cmd as $item)
                
            
          <tr>
            

          <td>{{$item->Numerocommande}}</td>
          
            <td>{{$item->quantite}} L</td>
            <td>{{$item->datecommande}} </td>
            
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>  
    
@endsection