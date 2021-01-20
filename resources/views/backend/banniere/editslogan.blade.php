@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit</h1>
@stop

@section('content')
    <form action="/admin/slogan/{{ $slogan->id }}" method="POST" >
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
            <label for="exampleInputPassword1">slogan</label>
            <input type="text" id="exampleInputPassword1" name="slogan" value="{{ $slogan->slogan }}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
