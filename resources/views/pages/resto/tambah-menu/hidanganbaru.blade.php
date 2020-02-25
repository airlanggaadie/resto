@extends('layouts.resto.tambah-menu.hidanganbaru')

@section('title', 'Tambah Hidangan Baru')
    
@section('content')

<cimiko>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="row mb-3">
                    <div class="col-4">
                        <img src="{{ url('frontend/img/berbaris.png') }}" class="img-thumbnail" alt="Ber-bariS" width="150px">
                    </div>
                    <div class="col-8 align-self-center">
                        <h2 class="text-primary">Pasang Foto</h2>
                        <p>Hidangan dengan foto berkualitas tinggi biasanya jadi lebih
                            populer. Maksimal 2 MB. Jenis foto yang diterima: PNG,JPG.</p>
                    </div>
                </div>
                

                <form action="#">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Hidangan</label>
                      <input type="text" class="form-control" placeholder="Beri Nama Hidangan Ini.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Deskripsi</label>
                      <input type="text" class="form-control" placeholder="Bahan-bahan, Cara Pembuatan, dan Lain-lain.">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga <sup>*</sup></label>
                        <input type="number" class="form-control" placeholder="Masukan Harga Hidangan Ini.">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kategori <sup>*</sup></label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Buat Hidangan</button>
                  </form>
            </div>
        </div>
    </div>
</cimiko>
    
@endsection