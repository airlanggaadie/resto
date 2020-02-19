@extends('layouts.menu.menu')

@section('title', 'Halaman Menu')

@section('content')
<section>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">id restaurant</th>
            <th scope="col">Menu</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($menu as $tampil)
          <tr>
          <td>{{ $tampil->id }}</td>
            <td>{{ $tampil->id_restaurant }}</td>
            <td>{{ $tampil->menu }}</td>
            <td>{{ $tampil->price }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</section>
@endsection