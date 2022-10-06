<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $queryed_page = request()->query('page') ? true : false;
        return view('home',[
            'products' => Product::orderBy('created_at','DESC')->paginate(20),
            'queryed_page' => $queryed_page
        ]);
    }
}
