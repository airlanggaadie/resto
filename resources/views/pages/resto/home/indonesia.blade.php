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
            {{-- <form action="">
                <p style="display: inline-block;">Saya memulai Ber-bisniS di</p>
                <select class="form-control selectpicker" name="nama-negara" id="nama-negara" style="display: inline-block; width: 200px;">
                    <option value="" data-thumbnail="{{url('frontend/img/flag/indonesiaflag.png')}}"><a href="#"><img src="{{url('frontend/img/flag/indonesiaflag.png')}}" width="25px" 
                        height="15px" alt="Ber-bariS"> Indonesia</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/malaysiaflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Malaysia</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/Singaporeflag.svg')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Singapore</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/philippinesflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Philippines</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/thailandflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Thailand</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/vietnamflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Vietnam</a></option>
                </select>
            </form> --}}

            {{-- <form action="" id="demoDefaultSelection">
                <p style="display: inline-block;">Saya memulai Ber-bisniS di</p>
                <select class="selectpicker select" name="nama-negara" id="nama-negara" style="display: inline-block; width: 200px;">
                    <option value="" data-imagesrc="{{url('frontend/img/flag/indonesiaflag.png')}}"><a href="#"><img src="{{url('frontend/img/flag/indonesiaflag.png')}}" width="25px" 
                        height="15px" alt="Ber-bariS"> Indonesia</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/malaysiaflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Malaysia</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/Singaporeflag.svg')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Singapore</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/philippinesflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Philippines</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/thailandflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Thailand</a></option>
                    <option value=""><a href="#"><img src="{{url('frontend/img/flag/vietnamflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Vietnam</a></option>
                </select>
            </form> --}}

            <div class="dropdown">
                <p style="display: inline-block;">Saya memulai Ber-bisniS di</p>
                <button id="my-dropdown" class="btn btn-light px-0 py-0 border border-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a class="dropdown-item px-2" href="{{route('home')}}"><img src="{{url('frontend/img/flag/indonesiaflag.png')}}" width="25px" 
                        height="15px" alt="Ber-bariS"> Indonesia</a>
                </button>
                <div class="dropdown-menu" aria-labelledby="my-dropdown">
                    <a class="dropdown-item px-2" href="{{route('malaysiahome')}}"><img src="{{url('frontend/img/flag/malaysiaflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Malaysia</a>
                    <a class="dropdown-item px-2" href="#"><img src="{{url('frontend/img/flag/Singaporeflag.svg')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Singapore</a>
                    <a class="dropdown-item px-2" href="#"><img src="{{url('frontend/img/flag/philippinesflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Philippines</a>
                    <a class="dropdown-item px-2" href="#"><img src="{{url('frontend/img/flag/thailandflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Thailand</a>
                    <a class="dropdown-item px-2" href="#"><img src="{{url('frontend/img/flag/vietnamflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Vietnam</a>
                </div>
            </div>

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