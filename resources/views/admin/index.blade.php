@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
 <div class="col-md-8">
     <div class="card"> 
       <h2>  Hello  {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} !!</h2>
</div>
</div>
</div>
<div class="container">
    <div class="row justify-content-center">
      
             
        <div class="col-md-4">
        <div class="card">
                        <a href="{{ route("admin.admins") }}" style="text-decoration: none" >
                <div class="card bg-info text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Dashboard</h3>
                        <span class="font-weight-bold">
                         
                        </span>
                    </div>
                </div>
            </a>
                    </div>
        
            
                        <div class="card">
                        <a href="{{ route("admin.products") }}" style="text-decoration: none" >
                <div class="card bg-info text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Products</h3>
                        <span class="font-weight-bold">
                            {{ $products->count() }}
                        </span>
                    </div>
                </div>
            </a>
                    </div>
                    <div class="col-md-13">
            <a href="{{ route("admin.orders") }}" style="text-decoration: none">
                <div class="card bg-danger text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Orders</h3>
                        <span class="font-weight-bold">
                            {{ $orders->count() }}
                        </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-13">
            <a href="{{ route("admin.users") }}" style="text-decoration: none">
                <div class="card bg-warning text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Custumers</h3>
                        <span class="font-weight-bold">
                            {{ $users->count() }}
                        </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-13">
            <a href="{{ route("admin.categories") }}" style="text-decoration: none">
                <div class="card bg-success text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Categories</h3>
                        <span class="font-weight-bold">
                            {{ $categories->count() }}
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection