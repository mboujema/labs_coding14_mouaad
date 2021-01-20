@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center" style="font-weight: bold">Profile</h1>
@stop

@section('content')
    <div class="row d-flex">
        <div class="col-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-12 d-flex flex-column">
                            <h3 class="bg-dark">Edit Photo</h3>
                            <div>
                                <img src=" img/{{ Auth::user()->path }}" alt="" class="img-fluid mb-5 img-thumbnail">
                                <p class="my-2">Modifier votre photo de profil en cliquant sur le bouton.</p>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-12 d-flex d-flex flex-column">
                            <h3 class="bg-dark">Edit Account</h3>
                            <form action="/admin/user/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
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
                                <div>
                                    <label class="form-label">Nom et prénom</label>
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">

                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email}}">

                                    <label class="form-label">Editez le mot de passe</label>
                                    <input type="password" class="form-control" name="password"
                                        value="{{ Auth::user()->password }}">

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">path</label>
                                            <input type="file"  id="exampleInputPassword1"
                                                name="path" value="{{ Auth::user()->path }}">
                                        </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
