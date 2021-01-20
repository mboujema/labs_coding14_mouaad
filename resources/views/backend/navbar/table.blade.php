@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="text-center m-2">
            <h1>Navbar</h1>
            {{-- <a href="{{ route("navbar.create") }}" class="btn btn-primary"> Create</a> --}}
        </div>

        <div>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Logo</th>
                    <th scope="col">navbar buton 1</th>
                    <th scope="col">navbar buton 2</th>
                    <th scope="col">navbar buton 3</th>
                    <th scope="col">navbar buton 4</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($navbars as $e)
                        
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>
                            <img src="{{ asset("img/$e->path") }}" class="img-fluid" alt="">
                        </td>
                        <td>{{ $e->navbar1 }}</td>
                        <td>{{ $e->navbar2 }}</td>
                        <td>{{ $e->navbar3 }}</td>
                        <td>{{ $e->navbar4 }}</td>
                        <td class="d-flex">
                            <a href="/admin/navbar/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                            
                            {{-- <form action="/admin/navbar/{{ $e->id }}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger ml-2" type="submit">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
              </table>
        </div>

        
    </div>
@stop
