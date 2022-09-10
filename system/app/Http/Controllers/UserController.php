<?php
namespace App\Http\Controllers;

use App\Models\User;    


class UserController extends controller  
{
    function index(){
        $data['list_user'] = User::all();
        return view('admin.user.index', $data);
    }
    function create(){
        return view('admin.user.create');
    }
    function store(){
       $user = new User;
       $user->nama = request('nama');
       $user->email = request('email');
       $user->password = bcrypt(request('password'));
       $user->save();

       return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(user $user){
        $data['user'] = $user;
       return view('admin.user.show', $data);
    }
    function edit(user $user){
        $data['user'] = $user;
       return view('admin.user.edit', $data);
    }
    function update(user $user){
      
        $user->nama = request('nama');
        $user->email = request('email');
        if(request('password')) $user->password = bcrypt(request('password'));
        $user->password = bcrypt(request('password'));
        $user->save();

     
             return redirect('user')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(user $user){
        $user->delete();
        return redirect('user')->with('danger', 'Data Berhasil Dihapus');
    }
}