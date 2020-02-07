@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-secondary" role="alert">
                        Anda berhasil <a href="#" class="alert-link">menambahkan data !</a>
                      </div>
                      @endif
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">Room</th>
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
                                <th scope="row">{{ $key+1}}</th>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->phonenumber}}</td>
                                <td>{{ $item->gender}}</td>
                                <td>{{ $item->email}}</td>

                                <td> 
                                    {!! Form::open(['url' => 'room/edit/'.$item->id,'method'=>'get']) !!}
                                        {!! Form::submit('Edit!' ,['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['url' => 'room/delete/'.$item->id,'method'=>'delete']) !!}
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
@endsection
