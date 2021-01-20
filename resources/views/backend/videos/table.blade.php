@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="text-center m-2">
            <h1>Video</h1>
        </div>

        <div>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">image</th>
                    <th scope="col">lien</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $e)
                        
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>
                            <img src="{{ asset("img/$e->path") }}" class="img-fluid" alt="">
                        </td>
                        <td>{{ $e->link }}</td>
                        <td class="d-flex">
                            <a href="/admin/video/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
              </table>
        </div>

        
    </div>
@stop
