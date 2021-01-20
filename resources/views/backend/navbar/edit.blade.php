@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit</h1>
@stop

@section('content')
    <form action="/admin/navbar/{{ $navbar->id }}" method="POST" enctype="multipart/form-data">
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
            <input type="file" id="exampleInputPassword1" name="path" value="{{ $navbar->path }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">navbar buton 1</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="navbar1"
                value="{{ $navbar->navbar1 }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">navbar buton 2</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="navbar2"
                value="{{ $navbar->navbar2 }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">navbar buton 3</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="navbar3"
                value="{{ $navbar->navbar3 }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">navbar buton 4</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="navbar4"
                value="{{ $navbar->navbar4 }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
