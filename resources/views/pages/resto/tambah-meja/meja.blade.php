@extends('layouts.resto.admin')

@section('title', 'Tambah Meja Baru')
    
@section('content')
    
<cimiko>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="text-center mb-5">Buat Daftar Meja</h1>
                <form action="#">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Meja</label>
                      <input type="text" class="form-control" placeholder="Mis: Meja 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kategori <sup>*</sup></label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Normal</option>
                            <option>VIP</option>
                            <option>VVIP</option>
                            <option>SWEAT</option>
                          </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Buat Meja</button>
                  </form>
            </div>
        </div>
    </div>
</cimiko>

@endsection