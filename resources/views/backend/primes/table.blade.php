@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')

   <div class="container">
    <div class="text-center mb-5">
        <h1>Modifiez le Titre</h1>
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Title</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($primets as $e)
             
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->title }}</td>
             
             
             
             <td class="d-flex">
                 <a href="/admin/primet/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                 
             </td>
             
             
         </tr>
         @endforeach
       
     </tbody>
 </table>
 


</div>
@stop