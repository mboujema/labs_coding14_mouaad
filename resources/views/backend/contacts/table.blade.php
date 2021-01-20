@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
    <h1>Modifiez le contact</h1>
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Titre</th>
         <th scope="col">text</th>
         <th scope="col">titre2</th>
         <th scope="col">adresse</th>
         <th scope="col">numero</th>
         <th scope="col">email</th>
         <th scope="col">Button</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($contacts as $e)
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->title }}</td>
             <td>{{ $e->text }}</td>
             <td>{{ $e->title2 }}</td>
             <td>{{ $e->adress }}</td>
             <td>{{ $e->numero }}</td>
             <td>{{ $e->email }}</td>
             <td>{{ $e->button }}</td>

             <td class="d-flex">
                 <a href="/admin/contact/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
             </td>
         </tr>
         @endforeach

     </tbody>
 </table>
</div>
@stop