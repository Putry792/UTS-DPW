@extends('admin.base')

@section('content')
    <div class="container-fluid">
        <div class="row">     
                <div class="card">
                    <div class="card-body">
                        Data Artikel<div class="text-end upgrade-btn">
                            <a href="{{url('artikel/create')}}" class="btn btn-primary text-white"
                                ><i class="fa fa-plus"></i> Buat Artikel</a>
                              </div>
                              <div class="card-body">
                                <table class="table table-datatable">
                                    <thead>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Judul Artikel</th>
                                        <th>Penulis</th>
                                        <th>Tgl Terbit</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_artikel as $artikel)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div class="btn-group">
                                                <a href="{{url('artikel',$artikel->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                                <a href="{{url('artikel',$artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                     @include('template.utils.delete', ['url' => url('artikel', $artikel->id)])
                                                </div>
                                                
                                            </td>
                                            <td>{{$artikel->judul}}</td>
                                            <td>{{$artikel->penulis}}</td>
                                             <td>{{$artikel->terbit}}</td>
                                            
                                            
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    
    </div>
   


@endsection