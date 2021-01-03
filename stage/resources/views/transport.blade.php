<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="margin-top:-10px !important" ;style="background: rgb(2,0,36); background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);">
        <a class="navbar-brand" href="#">GeStock</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Container
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/stock">View Stock</a>
                  <a class="dropdown-item" href="/conteneur">+Ajouter</a>
                 
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Transport
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/display">Historique</a>
                  <a class="dropdown-item" href="/transport">+Ajouter</a>
                 
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Command
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 
                  <a class="dropdown-item" href="/stock">Commander</a>
                  <a class="dropdown-item" href="/command">Historique</a>
                 
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{session('data')['username']}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/profile"> Param</a>
                  <a class="dropdown-item" href="/logout"> Deconnecter</a>
                  
                 
              </li>
    
          </div>
        </div>
      </nav>

<div class="container contact-form">
            <div class="contact-image">
                <img src="images/cm.jpg" alt="rocket_contact"/>
            </div>
            
            <form  action="transport" method="POST">
                @csrf
                <h3>transport</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="matricule" class="form-control" placeholder="Matricule *" value="" class="@error('matricule') is-invalid @enderror" />
                        </div>
                        @error('matricule')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        <div class="form-group">
                            <input type="text" name="DriverFirstName" class="form-control" placeholder="Driver First Name *" value="" class="@error('DriverFirstName') is-invalid @enderror" />
                        </div>
                        @error('DriverFirstName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                        <div class="form-group">
                            <input type="text" name="DriverLastName" class="form-control" placeholder="Driver LastName *" value="" class="@error('DriverLastName') is-invalid @enderror" />

                           
                        </div>
                        @error('DriverLastName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                      <!--  <input type="text" name="idC" class="form-control" placeholder="Contenair *" value=""  />-->
                        <select class="form-control" id="selectUser" name="container" required focus>
                            <option>choose Containe</option>
                            @foreach($ce as $u)
                            <option value="{{$u->id}}">{{ $u->id }}</option>
                            @endforeach
                          </select>
                       
                    </div>
                    @error('container')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    </div>

                   

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="datetime-local" name="DateOfEntry" class="form-control"  value="" class="@error('DateOfEntry') is-invalid @enderror" />
                        </div>
                        @error('DateOfEntry')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                        <div class="form-group">
                            
                            <input type="datetime-local" name="ReleaseDate" class="form-control"  value="" class="@error('ReleaseDate') is-invalid @enderror" />
                            
                        </div>
                        @error('ReleaseDate')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                        <div class="form-group">
                            <input type="text" name="Quantity" class="form-control" placeholder="Quantity *" value="" class="@error('Quantity') is-invalid @enderror" />
                                </div>
                                @error('Quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        

                        <div class="form-group">
     <button class="btn btn-primary btnContact " type="submit">ADD</button>

                                                   </div>
                    </div>
                </div>
            </form>
</div>
</body>
</html>