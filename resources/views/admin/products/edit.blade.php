@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include("layouts.sidebar")
        </div>
        <div class="col-md-8">
            <div class="card p-3">
                <h3 class="card-title">Modifier le produit {{$product->title}}</h3>
                <div class="card-body">
                    <form method="post" action="{{ route("products.update",$product->slug) }}" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                        <div class="form-group">
                            <input type="text"
                            name="title"
                            placeholder="Title"
                            value="{{$product->title}}"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="description" placeholder="Description"
                                cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="number"
                                name="price"
                                placeholder="Price"
                                value="$product->price"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number"
                            name="old_price"
                            placeholder="Old Price"
                            value="$product->old_price"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number"
                            name="inStock"
                            placeholder="In Stock"
                            value="$product->inStock"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <img src="{{asset($product->image)}}" 
                            width="200"
                            height="200"
                            alt="{{$product->title}}">
</div>
                        <div class="form-group">
                            <input type="file"
                            name="image"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="category_id" class="form-control">
                                <option value="" selected disabled>
                                    Choose a category
                                </option>
                                @foreach ($categories as $category)
                                    <option 
                                    {{$product->category_id === $category->id ? "selected" : "" }}
                                    value="{{ $category->id }}">
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
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