@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card mb-3" style="max-width: 540px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src=" img/{{ Auth::user()->path }} " alt="" class="img-fluid mb-5 img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5>Votre profil</h5>
                                    <input class="form-control my-2" id="disabledInput" type="text" placeholder="{{ Auth::user()->name }}" disabled>
                                    <input class="form-control my-2" id="disabledInput" type="email" placeholder="{{ Auth::user()->email }}" disabled>
                                    <a href="{{ route("profile") }}" class="btn btn-dark text-light">Edit</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
