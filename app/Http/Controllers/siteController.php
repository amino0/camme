<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        $slider =  DB::select("SELECT * FROM `sliders` ");
        $blog =  DB::select("SELECT * FROM `blogs`");
        $partenaires =  DB::select("SELECT * FROM `partenaires`");

        return view('welcome', compact('slider', 'blog', 'partenaires'));
    }
    public function blog($id)
    {

        $blogs =  DB::select("SELECT * FROM `blogs` limit 4 ");
        $blog =  DB::select("SELECT * FROM `blogs` where id = $id ");
        return view('blog', compact('blogs', 'blog'));
    }
    public function apropos()
    {
        return view('about');
    }
    public function contact()
    {
        $partenaires =  DB::select("SELECT * FROM `partenaires`");

        return view('contact', compact('partenaires'));
    }
    public function motdudirecteur()
    {
        $partenaires =  DB::select("SELECT * FROM `partenaires`");

        return view('mot', compact('partenaires'));
    }
}
