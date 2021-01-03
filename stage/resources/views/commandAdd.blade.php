@extends('layout.app')
@section('title','AddNewCommand')
 @section('content')
     
 <div class="container-pt-5">
    <div class="row justify-content-center mt-5">
     <div class="col-md-6">
         <div class="card">
             <div class="card">
                 <div class="card-header">
                 <h1>Novelle Commande</h1>
                 </div>
                 <div class="card-body">
                  
                     <form   method="POST">
                         @csrf
                         
                         @if ($errors->any())
                         <div class="alert alert-danger">
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif
                        
                         <div class="form-group">
                            <input type="number" name="commande" class="form-control" placeholder="Quantite par Litre *"  class="@error('DriverFirstName') is-invalid @enderror" />
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" name="DateCommande" class="form-control"  value="" class="@error('DateCommande') is-invalid @enderror" />
                        </div>
 <div class="form-group text-center">
     <button class="btn btn-primary " type="submit">-Command</button>
 </div>
                     </form>
                 </div>
             </div>
            
         </div>
 
     </div>
        
    </div>
 </div>
     
 @endsection   
