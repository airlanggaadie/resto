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
            <h1>Rakan kongsi Ber-bariS!</h1>
            <h6 style="font-size: 17px;">Bersedia untuk memulakan perkongsian, dan mula menjalankan perniagaan dengan kami? <br><br>
                log masuk untuk memulakan perniagaan.</h6>
        </div>
        <div class="col-12 my-4 text-center">
            <div class="dropdown">
                <p style="display: inline-block;">Saya mula menjalankan perniagaan</p>
                <button id="my-dropdown" class="btn btn-light px-0 py-0 border border-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a class="dropdown-item px-2" href="{{route('malaysiahome')}}"><img src="{{url('frontend/img/flag/malaysiaflag.png')}}" width="25px"
                        height="15px" alt="Ber-bariS"> Malaysia</a>
                </button>
                <div class="dropdown-menu" aria-labelledby="my-dropdown">
                    <a class="dropdown-item px-2" href="{{route('home')}}"><img src="{{url('frontend/img/flag/indonesiaflag.png')}}" width="25px" 
                        height="15px" alt="Ber-bariS"> Indonesia</a>
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
                    style="border-radius: 50px; width: 80%;">Log Masuk</button>
            </a>

            <p>Tidak mempunyai akaun <span><a href=" {{ route('daftar') }} ">Senarai</a></span></p>
        </div>
        <div class="col-12 text-center justify-content-center">
            <p>Saya telah membaca, memahami dan bersetuju dengan 
                <span><a href="#">Terma Perkhidmatan</a></span>
                dan
                <span><a href="#">Dasar Privasi.</a></span></p>
        </div>
    </div>
</div>
@endsection