@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="text-center m-2">
            <h1>Cardrapid</h1>
            <a href="{{ route("cardrapid.create") }}" class="btn btn-primary"> Create</a>
        </div>

        <div>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Font</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cardrapids as $e)
                        
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>
                            <i class="{{ $e->font }}" style="font-family: fontAwesome"></i>
                        </td>
                        <td>{{ $e->title }}</td>
                        <td>{{ $e->description }}</td>
                        <td class="d-flex">
                            <a href="/admin/cardrapid/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                            
                            <form action="/admin/cardrapid/{{ $e->id }}" method="post">
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

        
    </div>
@stop
