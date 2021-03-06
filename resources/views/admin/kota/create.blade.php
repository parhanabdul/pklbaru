@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kota
                         <div class="card-body">
                             <form action="{{route('kota.store')}}" method="POST">
                        @csrf       
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="form-group">
                         <label for="">Provinsi</label>
                            <select name="id_provinsi" class="form-control" id="">
                            @foreach($provinsi as $data)
                                <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                                @endforeach
                          </select>
                         </div>
                             <div class ="form-group">
                             <label for="">Kode Kota</label>
                             <input type="text" name="kode_kota" class="form-control" require>
                        </div>  
                    <div class="mb-3">
                        <label for="" class="form-label">Kota</label>
                        <input type="text" name="nama_kota" class="form-control" id="">
                    </div>
                        <div class="form-group">
                        <button type ="submit" class = "btn btn-primary btn-primary btn-block">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection

