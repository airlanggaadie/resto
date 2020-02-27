@extends('layouts.resto.home')

@section('title', 'Ber-bariS')
    
@section('content')
<div class="col-6 text-center">
    <div class="row mx-3 my-5 bg-light border-primary" style="border-radius: 20px; height:85vh;">
        <div class="col-12 img text-center">
            <img src="{{ url('frontend/img/berbaris-1.png') }}" class="my-5" width="30%" alt="Ber-bariS">
        </div>
        <div class="col-12">
            <h2>Selamat Datang</h2>
            <h1>Mitra Ber-bariS!</h1>
            <h6 style="font-size: 17px;">Siap untuk mulai Ber-mitrA dan memulai Ber-bisniS dengan kami? <br><br>
                Masuk untuk mulai Ber-bisniS.</h6>
        </div>
        <div class="col-12 my-4 text-center">
            <form action="">
                <p style="display: inline-block;">Saya memulai Ber-bisniS di</p>
                <select class="form-control" name="nama-negara" id="nama-negara" style="display: inline-block; width: 200px;">
                    <option value=""><a href="#">Indonesia</a></option>
                    <option value=""><a href="#">Malaysia</a></option>
                    <option value=""><a href="#">Singapore</a></option>
                    <option value=""><a href="#">Philippines</a></option>
                    <option value=""><a href="#">Thailand</a></option>
                    <option value=""><a href="#">Vietnam</a></option>
                </select>
            </form>

        <a href="{{ route('login') }}">
                <button class="btn btn-light border-dark"
                    style="border-radius: 50px; width: 80%;">Login</button>
            </a>

            <p>Belum memiliki akun? <span><a href=" {{ route('daftar') }} ">Daftar</a></span></p>
        </div>
        <div class="col-12 text-center justify-content-center">
            <p>Saya telah membaca, memahami, menyetujui <span><a href="#">Ketentuan
                        Layanan</a></span>
                dan
                <span><a href="#">Kebijakan Privasi</a></span></p>
        </div>
    </div>
</div>
@endsection