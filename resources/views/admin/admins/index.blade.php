@extends('layouts.app')

@section('content')
  
 
<div class="container">
    <div class="row justify-content-center">
      
    <td class="col-md-4">
            @include('layouts.sidebar')
 <div>     
       
        <div class="col-md-8">
        <a
                href="{{ route("products.create") }}"
                class="btn btn-primary my-2">
                Add new product
                    <i class="fa fa-plus"></i>
            </a>
            <a
                href="{{ route("admins.create") }}"
                class="btn btn-primary my-2">
                Add new Admin
                    <i class="fa fa-plus"></i>
            </a>
        <table class="table table-hover" style="width:700px;">
<thead>
<tr>
<th>Id</th>
<th>Nom</th>
<th>Email</th>
<th>Actions</th>
 
 
<th></th>
<th></th>
 
 
</tr>
</thead>
<tbody>
@foreach ($admins as $admin)
<tr>
<td>{{ $admin->id }}</td>
<td>{{ $admin->name}}</td>
 
<td>{{ $admin->email}} </td>
 
 
 
 
 
 
 
 
</tr>
@endforeach
</tbody>
</table>

 <hr>
 <div class="justify-content-center d-flex">

   {{$admins}}
</div>        
        </div>
</div>
</div>
@endsection