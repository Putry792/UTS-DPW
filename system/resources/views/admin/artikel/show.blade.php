@extends('admin.base')

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                       Artikel
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">{{$artikel->judul}}</h3>
                        <ul class="list-style-none ">
                            <li><i class="mdi mdi-account"></i>{{$artikel->penulis}}</></li>
                            <li><i class="mdi mdi-lead-pencil"></i>{{$artikel->terbit}}</li>
                        </ul>
                      
                       
                        <hr>    
                           <p>{!! nl2br($artikel->isi) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
