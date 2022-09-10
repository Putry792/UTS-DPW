<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komen;

class WelcomeController extends Controller{
    function showWelcome()
    {
      $data['list_artikel'] = Artikel::all();
      return view('welcome', $data);
    }

    function detailArtikel(Artikel $artikel) 


    
  {
    $data['artikel'] = $artikel;
    $data2['list_komen'] = Komen::all();
    return view('detailArtikel', $data, $data2);
  }
}