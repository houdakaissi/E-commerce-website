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
        <table class="table table-hover" style="width:540px;">
<thead>
<tr>
<th>Id</th>
<th>Nom</th>
<th>Email</th>
<th>Active</th>
 
<th></th>
<th></th>
 
 
</tr>
</thead>
<tbody>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name}}</td>
 
<td>{{ $user->email}} </td>
 
 
<td>
@if($user->active >0 )
<i class="fa fa-check text-success"></i>
@else
<i class="fa fa-times text-danger"></i>
@endif
</td>
 
 
 
 
 
</tr>
@endforeach
</tbody>
</table>

 <hr>
 <div class="justify-content-center d-flex">

   {{$users}}
</div>        
        </div>
</div>
</div>
@endsection