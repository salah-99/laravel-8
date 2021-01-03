<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\conteneur;
use \App\Models\commande;

class container extends Controller
{
    public function cont(){
        return view ('conteneur');
    }
    public function insertNewCont(){
         
   $ct=new conteneur();
   
   $ct->save();
   return redirect('conteneur');
         
    }
    public function Allcont(){
        $container=conteneur::all();
        return view('ctdisplay',compact('container'));
    }
    public function cmd(){
   
        return view('commandAdd');
    }
    //ajout des commande
    public function insertCommand(Request $req,$id){    
        $req->validate([
            
            'commande'=>'required',
            'DateCommande'=>'required'
           
            ]);
         $cm=new commande();
        $cc=conteneur::find($id);
       
        if($cc->quantite>=$req->input('commande')){
            $cm->quantite=$req->input('commande');
            $cm->datecommande=$req->input('DateCommande');
            $cc->quantite-=$req->commande;
            
            $cc->save();
            $cm->save();
            return redirect('command');
        }
        else{
            echo "<script>alert('conteneur insufisant')
              location.href = '/stock';
              </script>";
        }
       
              
         }
         public function allcommand(){
             $cmd=commande::all();
             return view('cmdisplay',compact('cmd'));
         }
}
