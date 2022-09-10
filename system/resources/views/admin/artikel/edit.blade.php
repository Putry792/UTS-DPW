@extends('admin.base')

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Edit Artikel
                       
                    </div>
                    <div class="card-body">
                        <form action="{{url('artikel',$artikel->id)}}" method="POST"  >
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label class="control-label">Judul Artikel</label>
                                 <input type="text" class = "form-control" name="judul" value="{{$artikel->judul}}">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Penulis</label>
                                 <input type="text" class = "form-control" name="penulis" value="{{$artikel->penulis}}">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Tgl Terbit</label>
                                 <input type="date" class = "form-control" name="terbit" value="{{$artikel->terbit}}">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Isi Artikel</label>
                                <textarea name="isi" class = "form-control" >{{$artikel->isi}}</textarea>
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
