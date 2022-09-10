<?php
namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller{
    function index(){
        $data['list_artikel'] = artikel::all();
        return view('admin.artikel.index', $data);
    }
    function create(){
        return view('admin.artikel.create');
    }
    function store(){
        $artikel = new artikel;
        $artikel->judul = request('judul');
        $artikel->isi = request('isi');
        $artikel->penulis = request('penulis');
        $artikel->terbit = request('terbit');
        
             $artikel->save();
     
          
        return redirect('artikel')->with('success', 'Artikel Berhasil Dibuat');
    }
    function show(artikel $artikel){
        $data['artikel'] = $artikel;
       return view('admin.artikel.show', $data);
    }
    function edit(artikel $artikel){
        $data['artikel'] = $artikel;
       return view('admin.artikel.edit', $data);
    }
    function update(artikel $artikel){
      
        
        $artikel->judul = request('judul');
        $artikel->isi = request('isi');
        $artikel->penulis = request('penulis');
        $artikel->terbit = request('terbit');
             $artikel->save();
             return redirect('artikel')->with('success', 'Artikel Berhasil Diedit');
    }
    function destroy(artikel $artikel){
        $artikel->delete();
        return redirect('artikel')->with('danger', 'Artikel Berhasil Dihapus');
    }
}