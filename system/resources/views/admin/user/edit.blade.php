@extends('admin.base')

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Edit Data User
                       
                    </div>
                    <div class="card-body">
                        <form action="{{url('user', $user->id)}}" method="POST"  >
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label class="control-label">Nama </label>
                                 <input type="text" class = "form-control" name="nama" value="{{$user->nama}}">
                             </div>
                         
                        
                             <div class="form-group">
                                <label class="control-label">Email </label>
                                 <input type="email" class = "form-control" name="email" value="{{$user->email}}">
                             </div>
                         
                             <div class="form-group">
                                <label class="control-label">Password </label>
                                 <input type="password" class = "form-control" name="password" >
                             </div>
                                 
                             <div class="text-end mb-3 mx-3">
                                <button class="btn btn-primary text-white"><i class="fa fa-save"></i> Simpan</button>
                         </div>
                         </div>
     
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
   
@endsection
