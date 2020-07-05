<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    function home(){
    	return view('pages.home');
    }

    // show all
    function artikel(){
    	//$artikel = ArtikelModel::get_artikel();
    	return view('pages.artikel');
    }

    //hal form
    public function create(){
    	return view('pages.create');
    }

    // proses simpan
    public function save_artikel(Request $request){
    	//dd($request->all());
    	$new_artikel = ArtikelModel::save_artikel($request->all());
    	return redirect('/artikel');
    }
}
