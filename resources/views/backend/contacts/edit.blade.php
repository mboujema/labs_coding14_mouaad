@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit</h1>
@stop

@section('content')
    <form action="/admin/contact/{{ $contact->id }}" method="POST" >
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
            <input type="text" name="title" value="{{ $contact->title }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">text</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="text"
                value="{{ $contact->text }}">
        </div>

        <div class="form-group">
            <label >Title</label>
            <input type="text" name="title2" value="{{ $contact->title2 }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">adresse</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="adress"
                value="{{ $contact->adress }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">numero</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="numero"
                value="{{ $contact->numero }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="email"
                value="{{ $contact->email }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">button</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="button"
                value="{{ $contact->button }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
