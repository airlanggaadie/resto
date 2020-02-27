@extends('layouts.resto.admin')

@section('title', 'Tambah Kategori Meja')
    
@section('content')
    
<cimiko>
    <div class="container">
        <div class="row justify-content-center" style="height: 50vh;">
            <div class="col-8 align-self-center">
                <h1 class="mb-5 text-center" >Menambahkan Kategori Meja</h1>
                <form action="#">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Kategori Meja</label>
                      <input type="text" class="form-control" placeholder="Mis: Normal, VIP, VVIP.">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Buat Kategori</button>
                  </form>
            </div>
        </div>
    </div>
</cimiko>

@endsection