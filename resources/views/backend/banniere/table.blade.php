@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="text-center m-2">
            <h1>Banniere image</h1>
            <a href="{{ route("banniere.create") }}" class="btn btn-primary"> Create</a>
        </div>
        <div>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image BG</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($bannieres as $e)
                        
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>
                            <img class="img-fluid" src="{{ asset("img/$e->path") }}" alt="">
                        </td>
                        <td class="d-flex">
                            <a href="/admin/banniere/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                            
                            <form action="/admin/banniere/{{ $e->id }}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger ml-2" type="submit">Delete</button>
                            </form>
                        
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
              </table>
        </div>
        <h1 class="text-center">slogan</h1>
        <div>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image BG</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($slogans as $e)
                        
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>
                            <p>{{ $e->slogan }}</p>
                        </td>
                        <td class="d-flex">
                            <a href="/admin/slogan/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
              </table>
        </div>


        
    </div>
@stop
