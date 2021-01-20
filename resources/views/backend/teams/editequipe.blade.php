@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit</h1>
@stop

@section('content')
    <form action="/admin/equipe/{{ $equipe->id }}" method="POST" enctype="multipart/form-data">
        @method("put")

        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" id="exampleInputPassword1" name="path" value="{{ $equipe->path }}">
        </div>

        <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control"  name="name" value="{{ $equipe->name }}">
        </div>

        <div class="form-group">
            <label >Title</label>
            <input type="text" name="job" class="form-control"  value="{{ $equipe->job }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
