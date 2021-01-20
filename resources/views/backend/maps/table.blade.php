@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="container">
    <div class="text-center mb-5">
    <h1>Modifiez l'adresse</h1>
    </div>
    <table class="table table-success table-striped">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">name</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($maps as $e)
         <tr>
             <th scope="row">{{ $e->id }}</th>
             <td>{{ $e->name }}</td>

             <td class="d-flex">
                 <a href="/admin/map/{{ $e->id }}/edit" class="btn btn-success">Edit</a>
             </td>
         </tr>
         @endforeach

     </tbody>
 </table>
 <h1 class="text-center">Votre choix</h1>
 <div class="d-flex justify-content-center ">
    @foreach ($maps as $e)
	<div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $e->name }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/81"></a><br><style>.mapouter{position:relative;text-align:right;height:400;width:400;}</style><a href="https://google-map-generator.com"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400;width:400;}</style></div></div>
	@endforeach
 </div>
</div>
@stop