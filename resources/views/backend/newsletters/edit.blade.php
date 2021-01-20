@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
    <form action="/admin/newsletter/{{ $newsletter->id }}" method="POST">
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
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="{{ $newsletter->email }}">
            </div>









        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop