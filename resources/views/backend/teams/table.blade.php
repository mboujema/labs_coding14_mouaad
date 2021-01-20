@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
    <h1>Modifiez le titre de team</h1>
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
         @foreach ($teams as $e)
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->title }}</td>
             <td>{{ $e->button }}</td>

             <td class="d-flex">
                 <a href="/admin/team/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
             </td>
         </tr>
         @endforeach

     </tbody>
 </table>

 <div class="text-center m-2">
    <h1>Equipe</h1>
    <a href="{{ route("equipe.create") }}" class="btn btn-primary"> Create</a>
</div>

<div>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">name</th>
            <th scope="col">job</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($equipes as $e)
                
            <tr>
                <th scope="row">{{ $e->id }}</th>
                <td>
                    <img src="{{ asset("img/$e->path") }}" class="img-fluid" alt="">
                </td>
                <td>{{ $e->name }}</td>
                <td>{{ $e->job }}</td>

                <td class="d-flex">
                    <a href="/admin/equipe/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                    
                    <form action="/admin/equipe/{{ $e->id }}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger ml-2" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
      </table>
</div>
</div>
@stop