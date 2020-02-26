@extends('layouts.admin.app')
@section('title','Admin Page')
@section('user','active')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-secondary" role="alert">
                            Anda berhasil <a href="#" class="alert-link">menambahkan data !</a>
                        </div>
                        @endif
                        <div class="card-header" style="color: #8b92a9;">List User</div>
                        <div class="card-body">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Email</th>                            
                                        <th scope="col">#</th>
                                        <th scope="col">##</th>                                 
                                    </tr>
                                </thead>                            
                                <tbody>
                                    @foreach ($user as $key=>$item)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phonenumber }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->email }}</td>   
                                        <td> 
                                            {!! Form::open(['url' => 'user/edit/'.$item->id,'method'=>'get']) !!}
                                                {!! Form::submit('Edit!' ,['class' => 'btn btn-primary']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            {!! Form::open(['url' => 'user/delete/'.$item->id,'method'=>'delete']) !!}
                                                {!! Form::submit('Delete!' ,['class' => 'btn btn-danger']) !!} 
                                            {!! Form::close()!!}
                                        </td>
                                    </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            {{$user->links()}}
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
