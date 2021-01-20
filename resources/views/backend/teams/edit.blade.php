@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit</h1>
@stop

@section('content')
    <form action="/admin/team/{{ $team->id }}" method="POST" >
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
            <input type="text" name="title" value="{{ $team->title }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
