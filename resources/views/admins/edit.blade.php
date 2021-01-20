@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

    <div class="row">

        <div class="col">
            <div class="card shadow p-3  bg-white rounded">
                <div class="container text-center mt-5 ">
                    <span class=" text-dark  shadow text-center">
                        <h1>Editez le profil</h1>
                    </span>
                </div>
                <div class="card-body">
                    <div class="container text-center">

                        <form action="/admin/edituser/{{ $user->id }}/update" method="POST" enctype="multipart/form-data">
                            
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
                            <div class=" pt-5 pr-5 pl-5">
                                <label for="exampleInputEmail1" class="form-label">Nom et prénom</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="name" value="{{ $user->name }}">

                            </div>

                            <div class="m-5">
                                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email" value="{{ $user->email }}">
                            </div>
                            

                            {{--  <div class="form-group">
                                <label for="exampleInputPassword1">Veuillez importer une image</label>
                                <input type="file"  id="exampleInputPassword1"
                                    name="path" value="{{ $user->path }}">
                            </div>   --}}

                            <div class="form-group">

                                <select class="form-control" name="role_id">
                                    @foreach ($roles as $i)
                        
                                        <option value="{{ $i->id }}">{{ $i->name }}</option>
                        
                                    @endforeach
                                </select>
                            </div>



                            {{-- <div class="form-group">

                                <select class="form-control" name="role_id"> --}}
                                    {{-- @foreach ($roles as $i)

                                        <option value="{{ $i->id }}">{{ $i->name }}</option>

                                    @endforeach --}}
                                    {{-- </select>
                            </div> --}}

                            <button type="submit" class="btn btn-primary">Appliquer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop