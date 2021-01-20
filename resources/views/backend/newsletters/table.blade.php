@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')


   <div class="container">
       <div class="text-center mb-5">
           <h1>Contact</h1>
           <a href="{{ route("newsletter.create") }}" class="btn btn-primary">Create</a>
       </div>
       <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>

            <th scope="col">email</th>

            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($newsletters as $e)

            <tr>
                <th scope="row">{{ $e->id }}</th>

                <td>{{ $e->email }}</td>

                <td class="d-flex">
                    <a href="/admin/newsletter/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/admin/newsletter/{{ $e->id }}" method="post">
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



@stop