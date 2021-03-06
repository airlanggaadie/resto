@extends('layouts.resto.register')

@section('title', 'Pendaftaran')
    
@section('content')
        <div class="col-12 text-center">
            <h1>Form Register</h1>
        </div>
        <div class="row border border-dark pt-5 px-5" style="border-radius: 20px;">
            <div class="col-12">
                <form action="">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ url('frontend/img/berbaris.png') }}" class="img-thumbnail" alt="Ber-bariS" width="100%">
                        </div>
                        <div class="col-9 align-self-center">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama Resto</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama Pemilik Resto</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nomor KTP</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nomor NPWP</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="form-group">
                                <label>Alamat Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Ulangi Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="my-textarea">Alamat Restaurant</label>
                                    <textarea id="my-textarea" class="form-control" name="" rows="4"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>RT</label>
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>RW</label>
                                <input type="number" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.541618950899!2d106.6986608146065!3d-6.192031462388543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f97c1edc3475%3A0xc4a1607fe3e5804f!2sEdutech!5e0!3m2!1sid!2sid!4v1582723648151!5m2!1sid!2sid" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>

                        <div class="col-12 my-2">
                            <input type="checkbox" name="" id="">
                            <label for="">Saya setuju untuk mengikuti semua persyaratan yang ada. <span><a href="#">Persyaratan dan Ketentuan.</a></span></label>
                        </div>

                        <div class="col-12 mb-5">
                            <a href="#"><button class="btn btn-light border-dark w-100" style="border-radius: 50px;">REGISTER</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection