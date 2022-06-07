<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Show products.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( )
    {
        return view('home')->with([
            "products" =>Product::latest()->paginate(24),
            "categories" =>Category::has("products")->get(),
        ]);
    }
    /**
     * Show products by cate.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getProductByCategory(Category $category)
    {
        $products=$category->products()->paginate(24);
        return view('home')->with([
            "products" =>$products,
            "categories" =>Category::has("products")->get(),
        ]);
    }
    public function get1(){
        return view('products.acceuil')->with([
        "products" =>Product::latest()->paginate(10),
        "categories" =>Category::has("products")->get(),
    ]);
    }
    public function get2(){
        return view('products.contact')->with([
        "products" =>Product::latest()->paginate(10),
        "categories" =>Category::has("products")->get(),
    ]);
    }
    public function getPromo(){
        return view('products.promo1')->with([
        "products" =>Product::latest()->paginate(3000),
        "categories" =>Category::has("products")->get(),
    ]);
    }
    public function getNouveau(){
        return view('products.nouveau1')->with([
        "products" =>Product::latest()->paginate(24000),
        "categories" =>Category::has("products")->get(),
    ]);
    }
}
