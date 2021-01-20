@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="/admin/testimonial/{{ $testimonial->id }}" method="POST" enctype="multipart/form-data">
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
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{ $testimonial->name }}">
        </div>
    
        <div class="form-group">
            <label for="exampleInputPassword1">Poste</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="{{ $testimonial->title }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control" id="exampleInputPassword1"
                name="description" value="{{ $testimonial->description }}">
        </div>

        
        <div class="form-group">
            <label for="exampleInputPassword1">path</label>
            <input type="file"  id="exampleInputPassword1"
                name="path" value="{{ $testimonial->path }}">
        </div>
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop