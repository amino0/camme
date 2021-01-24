<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motdudirecteur;
use App\Apropo;
use App\Organisation;
use App\Actualite;
use App\Partenaire;
use App\Slider;
use App\Expert;
use App\Text;
use Illuminate\Support\Facades\DB;

class homecontroller extends Controller
{
    public function index(){
        $Motdudirecteur = Motdudirecteur::all();
        $Actualite = Actualite::all();
        $Partenaire = Partenaire::all();
        $sliders =Slider::all();
        $expert =DB::select("SELECT * FROM `experts` LIMIT 3 ");
    return view('welcome', compact('Motdudirecteur','Partenaire','Actualite','sliders','expert'));
    }
    public function mot(){
        $Motdudirecteur = Motdudirecteur::all();
        $a = Motdudirecteur::all();
        $Actualite = DB::select("SELECT * FROM `actualites` order by `actualites`.`date` DESC LIMIT 3 ");

        return view('mot', compact('Motdudirecteur','Actualite'));
    }  
    public function apropos(){
        $Apropo = Apropo::all();
        $Actualite = DB::select("SELECT * FROM `actualites` order by `actualites`.`date` DESC LIMIT 3 ");

        return view('apropos', compact('Apropo','Actualite'));
    } 
    public function organisation(){
        $organisation = organisation::all();
        $Actualite = DB::select("SELECT * FROM `actualites` order by `actualites`.`date` DESC LIMIT 3 ");

        return view('organisation', compact('organisation','Actualite'));
    }
    public function actualite($id){
        $Actualites = DB::select("SELECT * FROM `actualites` order by `actualites`.`date` DESC LIMIT 3 ");

        $Actualite = Actualite::where('id',$id)->get();
        //dd($Actualite);
        return view('Actualite', compact('Actualites','Actualite'));
    }

    public function contact(){
        $Actualite = DB::select("SELECT * FROM `actualites` order by `actualites`.`date` DESC LIMIT 3 ");

        return view('contact',compact('Actualite'));
    }
    public function juridique(){

        $juridique = Text::all();
//dd($juridique);
        $Actualite = DB::select("SELECT * FROM `actualites` order by `actualites`.`date` DESC LIMIT 3 ");

        return view('juridique',compact('Actualite','juridique'));
    }
   




    public function search(Request $request)
    {
        $posts=Actualite::where('title',$request->keywords)->get();
        return response()->json($posts);
         
    }

}
