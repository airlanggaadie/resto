@extends('layouts.admin.app')
@section('title','Admin Page')

@section('content')    
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User</h1>
            <a href="" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50">Tambah User</i>
            </a>
        </div>

        <div class="row">                       
            <div class="card-body">
                <table class="table">
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
@endsection
