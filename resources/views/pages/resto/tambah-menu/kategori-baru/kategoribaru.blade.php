@extends('layouts.resto.admin')

@section('title', 'Tambah Kategori Baru')
    
@section('content')
<cimiko>
    <div class="container">
        <div class="row justify-content-center" style="height: 50vh;">
            <div class="col-8 align-self-center">
                <form action="#">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Kategori</label>
                      <input type="text" class="form-control" placeholder="Mis: Dessert">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Buat Kategori</button>
                  </form>
            </div>
        </div>
    </div>
</cimiko>
@endsection