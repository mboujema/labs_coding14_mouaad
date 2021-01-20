@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
    <h1>Modifiez le ready</h1>
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Titre</th>
         <th scope="col">Sous-titre</th>
         <th scope="col">Button</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($promotions as $e)
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->title }}</td>
             <td>{{ $e->stitle }}</td>
             <td>{{ $e->button }}</td>

             <td class="d-flex">
                 <a href="/admin/promotion/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
             </td>
         </tr>
         @endforeach

     </tbody>
 </table>
</div>
@stop