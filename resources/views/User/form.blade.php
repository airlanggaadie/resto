@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="" type="button" class="btn btn-dark mb-2"><-Back</a>
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {!! Form::open(['url' => isset($user)? 'user/edit/'.$user->id :'user/store','method'=>isset($user)?'put':'post']) !!}
                    <div class="form-group">
                        {!!Form::label('name', 'Name', ['class' => 'control-label'])!!}
                        
                        {!!Form::text('name', isset($user)?$user->name:'', ['class' => 'form-control','placeholder'=>'Name'])!!}
                        <br>
                        {!!Form::label('phonenumber', 'Phone Number', ['class' => 'control-label'])!!}
                        
                        {!!Form::text('phonenumber', isset($user)?$user->phonenumber:'', ['class' => 'form-control','placeholder'=>'Phone number'])!!}
                        <br>
                        {!!Form::label('gender', 'Gender', ['class' => 'control-label'])!!}
                        
                        {!!Form::text('gender', isset($user)?$user->phonenumber:'', ['class' => 'form-control','placeholder'=>'Gender'])!!}
                        <br>
                        {!!Form::label('email', 'E-Mail', ['class' => 'control-label'])!!}
                        
                        {!!Form::text('email', isset($user)?$user->email:'', ['class' => 'form-control','placeholder'=>'E-Mail'])!!}
                   
                    </div>
                    {!! Form::submit('Submit', ['class' => 'btn btn-dark w-25'])!!}
    
                    {!! Form::close() !!}
                 </div>
               
            </div> 


           
            
        </div>
    </div>
</div>
@endsection