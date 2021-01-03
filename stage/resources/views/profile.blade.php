@extends('layout.app')
@section('title','profile')
    @section('content')
<div class="container-pt-5">
    <div class="row justify-content-center mt-5">
     <div class="col-md-6">
         <div class="card">
             <div class="card">
                 <div class="card-header text-center">
                 <h1>Admin</h1>
                 </div>
                 <div class="card-body">
                     
                     <form  action="profile" method="POST">
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
                         <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right ">UserName</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right ">Ancien Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right ">NouveauPassword</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('NPassword') is-invalid @enderror" name="NPassword"  >

                                
                            </div>
                        </div>

                         
 <div class="form-group text-center">
     <button class="btn btn-secondary " type="submit">Modifier</button>
 </div>
                     </form>
                 </div>
             </div>
            
         </div>
 
     </div>
        
    </div>
 </div>
    @endsection 