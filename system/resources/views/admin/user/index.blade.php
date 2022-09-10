@extends('admin.base')

@section('content')
    <div class="container-fluid">
        <div class="row">     
                <div class="card">
                    <div class="card-body">
                        Data user<div class="text-end upgrade-btn">
                            <a href="{{url('user/create')}}" class="btn btn-primary text-white"
                                ><i class="fa fa-plus"></i> Tambah User</a>
                              </div>
                              <div class="card-body">
                                <table class="table table-datatable">
                                    <thead>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                     
                                    </thead>
                                    <tbody>
                                        @foreach ($list_user as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div class="btn-group">
                                                <a href="{{url('user',$user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                                <a href="{{url('user',$user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                     @include('template.utils.delete', ['url' => url('user', $user->id)])
                                                </div>
                                                
                                            </td>
                                            <td>{{$user->nama}}</td>
                                            <td>{{$user->email}}</td>
                                            
                                            
                                            
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