@extends('admin.base')

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Buat Artikel
                       
                    </div>
                    <div class="card-body">
                        <form action="{{url('artikel')}}" method="POST"  >
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Judul Artikel</label>
                                 <input type="text" class = "form-control" name="judul">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Penulis</label>
                                 <input type="text" class = "form-control" name="penulis">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Tgl Terbit</label>
                                 <input type="date" class = "form-control" name="terbit">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Isi Artikel</label>
                                <textarea name="isi" class = "form-control" ></textarea>
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
