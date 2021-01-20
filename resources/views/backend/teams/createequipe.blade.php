@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Create</h1>
@stop

@section('content')
<div class="container">

    <form action="{{ route('equipe.store') }}" method="POST" enctype="multipart/form-data">
        
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
        <label for="exampleInputPassword1">Image</label>
        <input type="file" id="exampleInputPassword1" name="path">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="name">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">job</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="job">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop