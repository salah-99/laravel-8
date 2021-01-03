@extends('layout.app')
@section('title','ctdisplay');
@section('content')

<div class="container">

    <table class="table text-dark bg-light text-center mt-5">
        <thead>
          <tr>
            
            <th scope="col">Num</th>
            <th scope="col">Quantity</th>
            <th scope="col">Commander</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach($container as $item)
                
            
          <tr>
            

          <td>{{$item->id}}</td>
          
            <td>{{$item->quantite}} L</td>
            <td> <span class="float-right mr-2">
              <a href="command/{{$item->id}}" style="color: blue">
                      <i class="fa fa-pencil" aria-hidden="true">command</i>
                  </a>
          </span>
        </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>  
    
@endsection