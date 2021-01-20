@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Create</h1>
@stop

@section('content')
<div class="container">

    <form action="{{ route('navbar.store') }}" method="POST" enctype="multipart/form-data">
        
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
        <label for="exampleInputPassword1">Image logo</label>
        <input type="file" id="exampleInputPassword1" name="path">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">navbar bouton 1</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="navbar1">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">navbar bouton 2</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="navbar2">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">navbar bouton 3</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="navbar3">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">navbar bouton 4</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="navbar4">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop