<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;
use App\Category;
use App\Admin;
use App\Order;
use App\User;
use App\Product;
class AdminController extends Controller
{
    public function create()
    {
           
           return view("admin.admins.create")->with([
            "admins" => Admin::all()
        ]);
    }
    public function __construct()
    {
        $this->middleware('auth:admin')
            ->except(["showAdminLoginForm", "adminLogin"]);
    }

    public function index()
    {
        return view("admin.index")->with([
            "products" =>Product::all(),
            "orders"=>Order::all(),
            "users"=>User::all(),
            "categories"=>Category::all()
        ]) ;
        
    }
     



    public function showAdminLoginForm()
    {
        if(auth()->guard("admin")->check()){
            return redirect("/admin");
        }
        return view("admin.auth.login");
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (auth()->guard("admin")->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->get("remember"))) {
            return redirect("/admin");
        } else {
            return redirect()->route("admin.login");
        }
    }

    public function adminLogout()
    {
        auth()->guard("admin")->logout();
        return redirect()->route("admin.login");
    }
    public function getProducts()
    {
        return view("admin.products.index")->with([
            "products" => Product::latest()->paginate(5)
        ]);
        
    }
    public function getOrders()
    {
        return view("admin.orders.index")->with([
            "orders" => Order::latest()->paginate(5)
        ]);
    }
    public function getUsers()
    {
        return view("admin.users.index")->with([
            "users" => User::latest()->paginate(5)
        ]);
    }
    public function getCategories()
    {
        return view("admin.categories.index")->with([
            "categories" => Category::latest()->paginate(5)
        ]);
    }
    public function getAdmins()
    {
        return view("admin.admins.index")->with([
            "admins" => Admin::latest()->paginate(5)
        ]);
    }
    public function store(Request $request)
    {
         
        $this->validate($request, [
            "name" => "required|min:1",
             
           
            "email" => "required|min:5",
            "password" => "required|min:3"
        ]);

        //add data
        

            Admin::create([
                "name" => $name,
                
                 
                 
                "email" => $request->email,
                "password" => $password,
            ]);
            return redirect()->route("admin.admins")
                ->withSuccess("Admin added");}
        
     
 
   
} 
