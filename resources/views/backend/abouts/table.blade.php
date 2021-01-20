@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
    <h1>Modifiez la section About</h1>
        {{-- <a href="{{ route("cardrapid.create") }}" class="btn btn-primary">Create</a> --}}
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Title</th>
         <th scope="col">Description 1</th>
         <th scope="col">Description 2</th>
         <th scope="col">Button</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($abouts as $e)
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->title }}</td>
             <td>{{ $e->description1 }}</td>
             <td>{{ $e->description2 }}</td>
             <td>{{ $e->button }}</td>

             <td class="d-flex">
                 <a href="/admin/about/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
             </td>
         </tr>
         @endforeach

     </tbody>
 </table>
</div>
@stop