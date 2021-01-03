@extends('layout.app')
@section('title','NouveauConteneur')
    @section('content')
<div class="container-pt-5">
   <div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card">
                <div class="card-header">
                <h1>Noveau conteneur</h1>
                </div>
                <div class="card-body">
                    
                    <form  action="conteneur" method="POST">
                        @csrf
                       
                        
<div class="form-group text-center">
    <button class="btn btn-primary " type="submit">+Ajouter</button>
</div>
                    </form>
                </div>
            </div>
           
        </div>

    </div>
       
   </div>
</div>
    
@endsection