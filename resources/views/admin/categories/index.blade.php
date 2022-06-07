@extends('layouts.app')

@section('content')
  
 
<div class="container">
    <div class="row justify-content-center">
      
             
        <td class="col-md-4">
            @include('layouts.sidebar')
</td>
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
        <table class="table table-hover">
<thead>
<tr>
<th>Id</th>
<th>Title</th>
 
<th>Actions</th>
 
 
<th></th>
<th></th>
</tr>
</thead>
<tbody>
@foreach ($categories as $category)
<tr>
<td>{{ $category->id }}</td>
<td>{{ $category->title}}</td>
 
 
 
 
 
 
 
 
</td>
<td class="d-flex flex-row justify-content-center align-items-center">
<a
                href="{{ route("categories.edit", $category->slug) }}"
                class="btn byn-sm btn-warning my-2">
                    <i class="fa fa-edit"></i>
            </a>
<form id="{{ $category->id }}" method="POST" action="{{ route("categories.destroy",$category->slug) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button
                                    onclick="event.preventDefault();
                                       if(confirm('Do you really want to delete {{ $category->title  }} ?'))
                                        document.getElementById({{ $category->id }}).submit();
                                    "
                                    class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
</td>
</td>
</tr>
@endforeach
</tbody>
</table>
 <hr>
 <div class="justify-content-center d-flex">

   {{$categories}}
</div>        
        </div>
    </div>
</div>
@endsection