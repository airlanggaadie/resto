@extends('layouts.admin')
@section('title','Admin Page')
@section('user','active')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="" type="button" class="btn btn-dark mb-2"><-Back</a>
                <div class="card">
                    <div class="card-header" style="color: #8b92a9;">Create</div>
                    <div class="card-body">
                        <div class="form-group">
                            {!! Form::open(['url' => isset($user)? 'user/edit/'.$user->id :'user/store','method'=>isset($user)?'put':'post']) !!}
                                {!!Form::label('name', 'Name', ['class' => 'control-label'])!!}                        
                                {!!Form::text('name', isset($user)?$user->name:'', ['class' => 'form-control','placeholder'=>''])!!}
                    
                                {!!Form::label('phonenumber', 'PhoneNumber', ['class' => 'control-label'])!!}                                
                                {!!Form::text('phonenumber', isset($user)?$user->phonenumber:'', ['class' => 'form-control','placeholder'=>''])!!}
                                
                                {!!Form::label('gender', 'Gender', ['class' => 'control-label'])!!}                                
                                {!!Form::text('gender', isset($user)?$user->phonenumber:'', ['class' => 'form-control','placeholder'=>''])!!}
                        
                                {!!Form::label('email', 'E-Mail', ['class' => 'control-label'])!!}                                
                                {!!Form::text('email', isset($user)?$user->email:'', ['class' => 'form-control','placeholder'=>''])!!}
                                
                                {!!Form::label('password', 'Password', ['class' => 'control-label'])!!}                                
                                {!!Form::text('password', isset($user)?$user->password:'', ['class' => 'form-control','placeholder'=>''])!!}

                                {!! Form::submit('Submit', ['class' => 'btn btn-dark w-25 mt-5'])!!}                                
                            {!! Form::close() !!}
                        </div>
                     </div>                   
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection