@extends('admin.base')
@section('content')
<h1 class="m-3">Selamat Datang Kembali, {{Auth()->user()->nama}} :)</h1>
<a href="{{url('artikel/create')}}"  class="btn btn-primary text-white  m-2"> <button type="button" class="btn btn-primary btn-lg p-3"><i class="mdi mdi-border-color"></i>Menulis Artikel</button></a>

@endsection