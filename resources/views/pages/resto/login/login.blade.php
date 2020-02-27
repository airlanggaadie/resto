@extends('layouts.resto.home')

@section('title', 'Login')
    
@section('content')
<div class="login bg-light">
    
</div>

<div class="col-6 text-center">
    <div class="row mx-3 my-5 bg-light border-primary justify-content-center" style="border-radius: 20px; height:85vh;">
        <div class="col-12 img text-center">
            <img src="{{ url('frontend/img/berbaris-1.png') }}" class="mt-5" width="30%" alt="Ber-bariS">
        </div>
        <div class="col-12">
            <form action="{{ route('dashboard') }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control mx-auto w-75" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control mx-auto w-75" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label w-75 text-left" for="exampleCheck1">Saya telah membaca, memahami, menyetujui <span><a href="#">Ketentuan
                        Layanan</a></span>
                dan
                <span><a href="#">Kebijakan Privasi</a></span></label>
                </div>
                <button type="submit" class="btn btn-light w-75 border border-dark" style="border-radius:50px;">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection