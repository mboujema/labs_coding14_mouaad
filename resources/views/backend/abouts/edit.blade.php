@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit</h1>
@stop

@section('content')
    <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
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
            <label >Title</label>
            <input type="text" name="title" value="{{ $about->title }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description 1</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description1"
                value="{{ $about->description1 }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">description 2</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description2"
                value="{{ $about->description2 }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">button</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="button"
                value="{{ $about->button }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
