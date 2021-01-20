@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
   <div class="container">
       <div class="text-center mb-5">
           <h1>Nos Testimonials</h1>
           <a href="{{ route("testimonial.create") }}" class="btn btn-primary">Create</a>
       </div>
       <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Poste</th>
            <th scope="col">Description</th>
            <th scope="col">Path</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $e)
                
            <tr>
                <th scope="row">{{ $e->id }}</th>
                <td>{{ $e->name }}</td>
                <td>{{ $e->title }}</td>
                <td>{{ $e->description }}</td>
                <td><img src="{{ asset("img/$e->path") }}" alt="" class="img-fluid"></td>
                
                
                <td class="d-flex">
                    <a href="/admin/testimonial/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/admin/testimonial/{{ $e->id }}" method="post">
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


   <div class="container">
    <div class="text-center mb-5">
        <h1>Modifiez le Titre</h1>
        {{-- <a href="{{ route("navbar.create") }}" class="btn btn-primary">Create</a> --}}
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
         @foreach ($titles as $e)
             
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->title }}</td>
             
             
             
             
             <td class="d-flex">
                 <a href="/admin/title/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                 {{-- <form action="/admin/navbar/{{ $e->id }}" method="post">
                     @csrf
                     @method("delete")
                     <button class="btn btn-danger ml-2" type="submit">Delete</button>
             
                 </form> --}}
             </td>
             
             
         </tr>
         @endforeach
       
     </tbody>
 </table>
 


</div>
@stop