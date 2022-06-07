@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 card p-3">
           <strong> <h2 style="color:blue; " >Your cart</h2></strong>
            <table class="table table-hover">
                <thead  >
                    <tr  >
                        <th style="color:blue;"  >Image</th>
                        <th style="color:blue;">Title</th>
                        <th style="color:blue;">Qty</th>
                        <th style="color:blue;">Price</th>
                        <th style="color:blue;">Total</th>
                        <th style="color:blue;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <img src="{{ asset($item->associatedModel->image) }}"
                                     alt="{{ $item->title }}"
                                     width="50"
                                     height="50"
                                     class="img-fluid rounded"
                                >
                            </td>
                            <td >
                                {{ $item->name }}
                            </td>
                            <td>
                                <form class="d-flex flex-row justify-content-center " action="{{ route("update.cart",$item->associatedModel->slug) }}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                        <input type="number" name="qty" id="qty"
                                            value="{{ $item->quantity }}"
                                            placeholder="Quantité"
                                            max="{{ $item->associatedModel->inStock }}"
                                            min="1"
                                            class="form-control"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <button style="width:35px;" type="submit" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                {{ $item->price }} $
                            </td>
                            <td>
                                {{ $item->price * $item->quantity}} $
                            </td>
                            <td>
                                <form class="d-flex flex-row justify-content-center align-items-center" action="{{ route("remove.cart",$item->associatedModel->slug) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <div class="form-group">
                                        <button style="width:35px;"type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="text-dark font-weight-bold">
                        <td colspan="3" class="border border-success">
                            Total
                        </td>
                        <td colspan="3" class="border border-success">
                            {{ Cart::getSubtotal() }} $
                        </td>
                    </tr>
                </tbody>
            </table>
            @if(Cart::getSubtotal() > 0)
                <div class="form-group">
                    <a href="{{ route("make.payment") }}" class="btn btn-primary mt-3">
                        Payer {{ Cart::getSubtotal() }} $ via PayPal
                    </a>
                </div>
            @endif 
        
    

<a href="http://127.0.0.1:8000/" class="continue-shopping link-colored d-inline-block font-weight-bold my-3"> <i class="fa fa-arrow-left" aria-hidden="true"></i>Continuer mes achats</a>
</div>
</div>
</div>
@endsection


 