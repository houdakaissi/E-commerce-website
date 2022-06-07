@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include("layouts.sidebar")
        </div>
        <div class="col-md-8">
            <div class="card p-3">
                <h3 class="card-title">Add new Admin</h3>
                <div class="card-body">
                    <form method="post" action="{{ route("admins.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="name"
                            name="name"
                            placeholder="name"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email"
                           password="email"
                            placeholder="email"
                            class="form-control">
                        </div>
                       
                        <div class="form-group">
                            <input type="password"
                           email="password"
                            placeholder="password"
                            class="form-control">
                        </div>
                         
                        
                         
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection