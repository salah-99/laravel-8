<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\transport;


use \App\Models\conteneur;

use DB;


class gestion extends Controller
{
    // affichage des view //
  /*transport*/ 
    public function tp(){
        $ce=conteneur::all();
        return view('transport',compact('ce'));
    }

    public function transportInsertion(Request $req){
       
        $req->validate([
            'matricule'=>'required',
            'DriverFirstName'=>'required',
            'DriverLastName'=>'required',
            'DateOfEntry'=>'required',
            'ReleaseDate'=>'required',
            'Quantity'=>'required',
            'container'=>'required|numeric'
            ]);
          
            $ctn = conteneur::find( $req->container);
          if($ctn->quantite<3000){
                $ctn->quantite +=$req->Quantity;
                $ctn->save();
                   
                $tp=new transport();
                $tp->matricule=$req->input('matricule');
                $tp->firstNameCond=$req->input('DriverFirstName');
                $tp->lastNameCond=$req->input('DriverLastName');
                $tp->dateEntre=$req->input('DateOfEntry');;
                $tp->dateSortie=$req->input('ReleaseDate');;
                $tp->quantite=$req->input('Quantity');
                
                $tp->save();
                return redirect('transport');
          }
          else{
              echo "<script>alert('conteneur plein')
              location.href = '/transport';
              </script>";
          }
        
         
        
        
       
    }
    public function displaytp(){
        $transport=transport::all();
        return view('tpdisplay',compact('transport'));
    }
    //////////////////////
    
    
    
}
